<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\NewsResource;
use App\Http\Resources\Api\V1\NewsSummaryResource;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NewsController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $validated = $request->validate([
            'q' => ['nullable', 'string', 'max:100'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:50'],
        ]);

        $news = News::query()
            ->published()
            ->when(
                filled($validated['q'] ?? null),
                function (Builder $query) use ($validated): void {
                    $search = trim($validated['q']);

                    $query->where(function (Builder $query) use ($search): void {
                        $query->where('title', 'like', '%'.$search.'%')
                            ->orWhere('content', 'like', '%'.$search.'%');
                    });
                },
            )
            ->latest('published_at')
            ->paginate($validated['per_page'] ?? 10)
            ->withQueryString();

        return NewsSummaryResource::collection($news);
    }

    public function show(News $news): NewsResource
    {
        abort_unless(
            News::query()->published()->whereKey($news->getKey())->exists(),
            404,
        );

        return new NewsResource($news);
    }
}
