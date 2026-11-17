<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('pages.category', [
            'categories' => Category::query()
                ->active()
                ->withCount(['products' => fn ($query) => $query->where('is_active', true)])
                ->orderBy('sort_order')
                ->get(),
        ]);
    }

    public function show(Category $category): View
    {
        abort_unless($category->is_active, 404);

        return view('pages.categoryDetail', [
            'category' => $category,
            'products' => $category->products()
                ->active()
                ->with('category')
                ->orderBy('sort_order')
                ->paginate(9),
        ]);
    }
}
