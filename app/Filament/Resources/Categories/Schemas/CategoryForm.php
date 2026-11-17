<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Kategori')
                    ->description('Nama dan deskripsi kategori yang tampil di katalog publik.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama kategori')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->maxLength(2000)
                            ->columnSpanFull(),
                    ]),

                Section::make('Pengaturan Tampilan')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->helperText('Kategori nonaktif tidak muncul di situs publik.')
                            ->default(true),
                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->minValue(0)
                            ->default(0)
                            ->helperText('Angka kecil tampil lebih dulu.'),
                    ])
                    ->columns(2),
            ]);
    }
}
