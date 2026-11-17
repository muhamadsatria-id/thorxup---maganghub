<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'benefits',
        'details',
        'image',
        'is_active',
        'is_featured',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', true);
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

    /**
     * @return array<int, string>
     */
    public function benefitList(): array
    {
        return $this->lines($this->benefits);
    }

    /**
     * @return array<int, string>
     */
    public function detailList(): array
    {
        return $this->lines($this->details);
    }

    /**
     * @return array<int, string>
     */
    private function lines(?string $text): array
    {
        return collect(preg_split('/\r\n|\r|\n/', (string) $text))
            ->map(fn (string $line): string => trim($line))
            ->filter()
            ->values()
            ->all();
    }
}
