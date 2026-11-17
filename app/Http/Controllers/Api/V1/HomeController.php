<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CarouselResource;
use App\Http\Resources\Api\V1\CategoryResource;
use App\Http\Resources\Api\V1\NewsSummaryResource;
use App\Http\Resources\Api\V1\ProductResource;
use App\Http\Resources\Api\V1\ProfileResource;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Models\ProfileBrand;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $profile = ProfileBrand::query()->first();

        $carousels = Carousel::query()
            ->active()
            ->ordered()
            ->get();

        $categories = Category::query()
            ->active()
            ->withCount(['products' => fn ($query) => $query->where('is_active', true)])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $products = Product::query()
            ->active()
            ->with('category')
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->take(6)
            ->get();

        $news = News::query()
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();

        return response()->json([
            'data' => [
                'profile' => $profile ? new ProfileResource($profile) : null,
                'carousels' => CarouselResource::collection($carousels),
                'categories' => CategoryResource::collection($categories),
                'featured_products' => ProductResource::collection($products),
                'latest_news' => NewsSummaryResource::collection($news),
                'stats' => [
                    'products' => Product::query()->active()->count(),
                    'categories' => Category::query()->active()->count(),
                    'published_news' => News::query()->published()->count(),
                ],
            ],
        ]);
    }
}
