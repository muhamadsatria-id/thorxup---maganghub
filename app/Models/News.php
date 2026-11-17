<?php

namespace App\Models;

use Database\Factories\NewsFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    /** @use HasFactory<NewsFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'author',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }

    #[Scope]
    protected function published(Builder $query): void
    {
        $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function imageUrl(): ?string
    {
        if (! $this->image) {
            return null;
        }

        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        if (Str::startsWith($this->image, 'images/')) {
            return asset($this->image);
        }

        return asset('storage/'.$this->image);
    }

    public function excerpt(int $limit = 160): string
    {
        return Str::limit(trim(strip_tags((string) $this->content)), $limit);
    }
}
