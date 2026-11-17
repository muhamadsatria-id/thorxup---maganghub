<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('q', ''));
        $categoryId = $request->integer('category');

        $products = Product::query()
            ->active()
            ->with('category')
            ->when($categoryId, fn ($query) => $query->where('category_id', $categoryId))
            ->when($search !== '', function ($query) use ($search): void {
                $query->where(function ($query) use ($search): void {
                    $query->where('name', 'like', '%'.$search.'%')
                        ->orWhere('description', 'like', '%'.$search.'%');
                });
            })
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(9)
            ->withQueryString();

        $categories = Category::query()
            ->active()
            ->withCount(['products' => fn ($query) => $query->where('is_active', true)])
            ->orderBy('sort_order')
            ->get();

        return view('pages.product', [
            'products' => $products,
            'categories' => $categories,
            'search' => $search,
            'categoryId' => $categoryId,
        ]);
    }

    public function show(Product $product): View
    {
        abort_unless($product->is_active, 404);

        $product->load('category');

        $related = Product::query()
            ->active()
            ->with('category')
            ->whereKeyNot($product->getKey())
            ->when($product->category_id, fn ($query) => $query->where('category_id', $product->category_id))
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        if ($related->isEmpty()) {
            $related = Product::query()
                ->active()
                ->with('category')
                ->whereKeyNot($product->getKey())
                ->orderBy('sort_order')
                ->take(3)
                ->get();
        }

        return view('pages.detailProduct', [
            'product' => $product,
            'related' => $related,
        ]);
    }
}
