<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Models\ProfileBrand;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.home', [
            'profile' => ProfileBrand::query()->first(),
            'carousels' => Carousel::query()->active()->ordered()->get(),
            'categories' => Category::query()
                ->active()
                ->withCount(['products' => fn ($query) => $query->where('is_active', true)])
                ->orderBy('sort_order')
                ->get(),
            'products' => Product::query()
                ->active()
                ->with('category')
                ->orderByDesc('is_featured')
                ->orderBy('sort_order')
                ->take(5)
                ->get(),
            'news' => News::query()->published()->latest('published_at')->take(3)->get(),
        ]);
    }
}
