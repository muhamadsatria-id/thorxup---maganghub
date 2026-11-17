<?php

namespace App\Models;

use Database\Factories\ProfileBrandFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProfileBrand extends Model
{
    /** @use HasFactory<ProfileBrandFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'vision',
        'mission',
        'core_values',
        'alamat',
        'email',
        'phone',
        'whatsapp',
    ];

    /**
     * @return array<int, string>
     */
    public function missionList(): array
    {
        return $this->lines($this->mission);
    }

    /**
     * @return array<int, string>
     */
    public function coreValueList(): array
    {
        return $this->lines($this->core_values);
    }

    public function whatsappUrl(?string $message = null): ?string
    {
        $number = preg_replace('/\D+/', '', (string) $this->whatsapp);

        if (! $number) {
            return null;
        }

        if (str_starts_with($number, '0')) {
            $number = '62'.substr($number, 1);
        }

        $url = 'https://wa.me/'.$number;

        return $message ? $url.'?text='.urlencode($message) : $url;
    }

    public function phoneUrl(): ?string
    {
        $number = preg_replace('/[^\d+]/', '', (string) $this->phone);

        return $number ? 'tel:'.$number : null;
    }

    /**
     * @return array<int, array{label: string, url: string}>
     */
    public function socialLinks(): array
    {
        $networks = [
            'instagram' => ['label' => 'Instagram', 'base' => 'https://www.instagram.com/'],
            'facebook' => ['label' => 'Facebook', 'base' => 'https://www.facebook.com/'],
            'youtube' => ['label' => 'YouTube', 'base' => 'https://www.youtube.com/'],
            'tiktok' => ['label' => 'TikTok', 'base' => 'https://www.tiktok.com/'],
            'linkedin' => ['label' => 'LinkedIn', 'base' => 'https://www.linkedin.com/company/'],
            'shopee' => ['label' => 'Shopee', 'base' => 'https://shopee.co.id/'],
            'tokopedia' => ['label' => 'Tokopedia', 'base' => 'https://www.tokopedia.com/'],
            'bukalapak' => ['label' => 'Bukalapak', 'base' => 'https://www.bukalapak.com/u/'],
            'lazada' => ['label' => 'Lazada', 'base' => 'https://www.lazada.co.id/'],
        ];

        $links = [];

        foreach ($networks as $field => $network) {
            $value = trim((string) $this->{$field});

            if ($value === '') {
                continue;
            }

            $url = Str::startsWith($value, ['http://', 'https://'])
                ? $value
                : $network['base'].ltrim($value, '@');

            $links[] = ['label' => $network['label'], 'url' => $url];
        }

        return $links;
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
