<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Models\ProfileBrand;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about', [
            'profile' => ProfileBrand::query()->first(),
            'productCount' => Product::query()->active()->count(),
            'categoryCount' => Category::query()->active()->count(),
            'newsCount' => News::query()->published()->count(),
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'profile' => ProfileBrand::query()->first(),
            'products' => Product::query()
                ->active()
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(['id', 'name']),
        ]);
    }
}
