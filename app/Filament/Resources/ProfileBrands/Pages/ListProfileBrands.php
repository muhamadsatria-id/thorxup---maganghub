<?php

namespace App\Filament\Resources\ProfileBrands\Pages;

use App\Filament\Resources\ProfileBrands\ProfileBrandResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfileBrands extends ListRecords
{
    protected static string $resource = ProfileBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
