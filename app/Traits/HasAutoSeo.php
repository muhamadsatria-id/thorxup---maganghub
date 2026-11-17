<?php

namespace App\Traits;

use App\Models\SeoMeta;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasAutoSeo
{
    public static function bootHasAutoSeo(): void
    {
        static::saved(function ($model) {
            $model->generateAutoSeo();
        });

        static::deleted(function ($model) {
            $model->seo()->delete();
        });
    }

    public function seo(): MorphOne
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }

    public function generateAutoSeo(): void
    {
        // Jika sudah dikunci manual oleh admin, hentikan proses otomatis
        if ($this->seo?->is_manual) {
            return;
        }

        $rawTitle = $this->getSeoRawTitle();
        $rawContent = $this->getSeoRawContent();
        $image = $this->getSeoImage();

        // 1. Bersihkan HTML & batasi panjang karakter sesuai standar Google SERP
        $cleanTitle = Str::limit(trim(strip_tags($rawTitle)), 60, '');
        $plainText = trim(preg_replace('/\s+/', ' ', strip_tags($rawContent)));
        $cleanDescription = Str::limit($plainText, 155, '...');

        // 2. Algoritma Ekstraksi Keyword Otomatis (Term Frequency + Stopwords Filter)
        $keywords = $this->extractTopKeywords($plainText, 8);

        // 3. Penentuan Index / No-Crawl otomatis
        $robots = $this->determineRobotsStatus();

        // 4. Schema.org JSON-LD
        $schema = $this->buildSchemaJson($cleanTitle, $cleanDescription, $image);

        $this->seo()->updateOrCreate(
            [
                'seoable_id' => $this->id,
                'seoable_type' => static::class,
            ],
            [
                'title' => $cleanTitle ? "{$cleanTitle} | " . config('app.name') : config('app.name'),
                'description' => $cleanDescription,
                'keywords' => $keywords,
                'canonical_url' => $this->getSeoUrl(),
                'robots' => $robots,
                'og_image' => $image,
                'schema_json' => $schema,
            ]
        );
    }

    protected function extractTopKeywords(string $text, int $limit = 8): string
    {
        $stopWords = [
            'dan', 'yang', 'di', 'ke', 'dari', 'ini', 'itu', 'untuk', 'dengan', 'adalah',
            'pada', 'dalam', 'tidak', 'akan', 'juga', 'atau', 'ada', 'karena', 'sebagai',
            'bisa', 'oleh', 'saat', 'sudah', 'lebih', 'dapat', 'bagi', 'serta', 'namun',
            'the', 'and', 'is', 'in', 'to', 'of', 'for', 'with', 'on', 'that', 'this'
        ];

        // Ambil hanya huruf/angka, ubah ke lowercase
        $cleanText = preg_replace('/[^\p{L}\p{N}\s]/u', '', mb_strtolower($text));
        $words = preg_split('/\s+/', $cleanText, -1, PREG_SPLIT_NO_EMPTY);

        // Filter kata pendek (< 4 huruf) dan stopwords
        $filtered = array_filter($words, fn($w) => mb_strlen($w) >= 4 && !in_array($w, $stopWords));

        $frequencies = array_count_values($filtered);
        arsort($frequencies);

        return implode(', ', array_slice(array_keys($frequencies), 0, $limit));
    }

    // --- Method Default (Bisa di-override di masing-masing Model) ---
    public function getSeoRawTitle(): string
    {
        return $this->title ?? $this->name ?? '';
    }

    public function getSeoRawContent(): string
    {
        return $this->content ?? $this->body ?? $this->description ?? '';
    }

    public function getSeoImage(): ?string
    {
        return $this->image ?? $this->thumbnail ?? $this->cover ?? null;
    }

    public function getSeoUrl(): string
    {
        return url()->current();
    }

    public function determineRobotsStatus(): string
    {
        // Otomatis noindex jika status draft atau is_published = false
        if (isset($this->is_published) && !$this->is_published) {
            return 'noindex, nofollow';
        }
        if (isset($this->status) && in_array(strtolower($this->status), ['draft', 'private', 'archived'])) {
            return 'noindex, nofollow';
        }
        return 'index, follow';
    }

    protected function buildSchemaJson(string $title, string $description, ?string $image): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => $title,
            'description' => $description,
            'url' => $this->getSeoUrl(),
            'image' => $image ? asset($image) : null,
            'datePublished' => $this->created_at?->toIso8601String(),
            'dateModified' => $this->updated_at?->toIso8601String(),
        ];
    }
}