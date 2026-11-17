<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        return view('pages.news', [
            'news' => News::query()->published()->latest('published_at')->paginate(6),
        ]);
    }

    public function show(News $news): View
    {
        abort_unless(News::query()->published()->whereKey($news->getKey())->exists(), 404);

        return view('pages.newsDetail', [
            'article' => $news,
            'related' => News::query()
                ->published()
                ->whereKeyNot($news->getKey())
                ->latest('published_at')
                ->take(3)
                ->get(),
        ]);
    }
}
