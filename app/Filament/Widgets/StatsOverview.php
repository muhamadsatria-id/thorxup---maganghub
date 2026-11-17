<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Inquiry;
use App\Models\News;
use App\Models\Product;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected static ?bool $isLazyLoaded = false;

    protected function getStats(): array
    {
        $newInquiries = Inquiry::query()->where('status', 'new')->count();
        $publishedNews = News::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->count();

        return [
            Stat::make('Produk aktif', Product::query()->where('is_active', true)->count())
                ->description(Product::query()->count().' produk terdaftar')
                ->descriptionIcon(Heroicon::OutlinedShoppingBag)
                ->color('primary'),
            Stat::make('Kategori aktif', Category::query()->where('is_active', true)->count())
                ->description(Category::query()->count().' kategori terdaftar')
                ->descriptionIcon(Heroicon::OutlinedSquares2x2)
                ->color('info'),
            Stat::make('Inquiry baru', $newInquiries)
                ->description(Inquiry::query()->count().' inquiry total')
                ->descriptionIcon(Heroicon::OutlinedInbox)
                ->color($newInquiries > 0 ? 'danger' : 'success'),
            Stat::make('Berita terbit', $publishedNews)
                ->description(News::query()->count().' berita tersimpan')
                ->descriptionIcon(Heroicon::OutlinedNewspaper)
                ->color('success'),
        ];
    }
}
