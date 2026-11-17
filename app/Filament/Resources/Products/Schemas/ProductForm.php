<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Produk')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama produk')
                            ->required()
                            ->maxLength(255),
                        Select::make('category_id')
                            ->label('Kategori')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->placeholder('Pilih kategori'),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->maxLength(4000)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Detail Teknis')
                    ->description('Gunakan satu baris untuk setiap poin.')
                    ->schema([
                        Textarea::make('benefits')
                            ->label('Keunggulan')
                            ->rows(4)
                            ->helperText('Satu keunggulan per baris.'),
                        Textarea::make('details')
                            ->label('Spesifikasi')
                            ->rows(4)
                            ->helperText('Satu spesifikasi per baris.'),
                    ])
                    ->columns(2),

                Section::make('Media & Publikasi')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Foto produk')
                            ->image()
                            ->disk('public')
                            ->directory('products')
                            ->visibility('public')
                            ->maxSize(4096)
                            ->imagePreviewHeight('180')
                            ->columnSpanFull(),
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->helperText('Produk nonaktif disembunyikan dari katalog publik.')
                            ->default(true),
                        Toggle::make('is_featured')
                            ->label('Unggulan')
                            ->helperText('Tampil lebih menonjol di halaman utama.'),
                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->minValue(0)
                            ->default(0)
                            ->helperText('Angka kecil tampil lebih dulu.'),
                    ])
                    ->columns(3),
            ]);
    }
}
