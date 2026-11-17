<?php

namespace App\Models;

use Database\Factories\CarouselFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Carousel extends Model
{
    /** @use HasFactory<CarouselFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'cta_label',
        'cta_url',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', true);
    }

    #[Scope]
    protected function ordered(Builder $query): void
    {
        $query->orderBy('sort_order')->orderBy('id');
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

    public function ctaHref(): ?string
    {
        if (! $this->cta_url) {
            return null;
        }

        if (Str::startsWith($this->cta_url, ['http://', 'https://'])) {
            return $this->cta_url;
        }

        return url($this->cta_url);
    }
}
