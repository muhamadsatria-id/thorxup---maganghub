<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProductResource;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $validated = $request->validate([
            'q' => ['nullable', 'string', 'max:100'],
            'category' => ['nullable', 'integer', 'exists:categories,id'],
            'featured' => ['nullable', 'boolean'],
            'sort' => ['nullable', 'in:default,name,newest,oldest'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:50'],
        ]);

        $query = Product::query()
            ->active()
            ->with('category')
            ->when(
                filled($validated['q'] ?? null),
                function (Builder $query) use ($validated): void {
                    $search = trim($validated['q']);

                    $query->where(function (Builder $query) use ($search): void {
                        $query->where('name', 'like', '%'.$search.'%')
                            ->orWhere('description', 'like', '%'.$search.'%')
                            ->orWhere('benefits', 'like', '%'.$search.'%');
                    });
                },
            )
            ->when(
                filled($validated['category'] ?? null),
                fn (Builder $query) => $query->where('category_id', $validated['category']),
            )
            ->when(
                $request->has('featured'),
                fn (Builder $query) => $query->where('is_featured', $request->boolean('featured')),
            );

        match ($validated['sort'] ?? 'default') {
            'name' => $query->orderBy('name'),
            'newest' => $query->latest(),
            'oldest' => $query->oldest(),
            default => $query->orderBy('sort_order')->orderBy('name'),
        };

        $products = $query
            ->paginate($validated['per_page'] ?? 12)
            ->withQueryString();

        return ProductResource::collection($products);
    }

    public function show(Product $product): ProductResource
    {
        abort_unless($product->is_active, 404);

        $product->load('category');

        return new ProductResource($product);
    }
}
