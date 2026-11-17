<?php

namespace App\Filament\Resources\ProfileBrands;

use App\Filament\Resources\ProfileBrands\Pages\CreateProfileBrand;
use App\Filament\Resources\ProfileBrands\Pages\EditProfileBrand;
use App\Filament\Resources\ProfileBrands\Pages\ListProfileBrands;
use App\Filament\Resources\ProfileBrands\Schemas\ProfileBrandForm;
use App\Filament\Resources\ProfileBrands\Tables\ProfileBrandsTable;
use App\Models\ProfileBrand;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ProfileBrandResource extends Resource
{
    protected static ?string $model = ProfileBrand::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingStorefront;

    protected static string|UnitEnum|null $navigationGroup = 'Pengaturan';

    protected static ?string $navigationLabel = 'Profil Brand';

    protected static ?string $modelLabel = 'Profil Brand';

    protected static ?string $pluralModelLabel = 'Profil Brand';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProfileBrandForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfileBrandsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProfileBrands::route('/'),
            'create' => CreateProfileBrand::route('/create'),
            'edit' => EditProfileBrand::route('/{record}/edit'),
        ];
    }
}
