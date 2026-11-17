<?php

namespace App\Filament\Resources\ProfileBrands\Pages;

use App\Filament\Resources\ProfileBrands\ProfileBrandResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfileBrand extends EditRecord
{
    protected static string $resource = ProfileBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
