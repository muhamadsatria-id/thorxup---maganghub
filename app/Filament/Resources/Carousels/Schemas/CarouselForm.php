<?php

namespace App\Filament\Resources\Carousels\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CarouselForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Slide')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('subtitle')
                            ->label('Subjudul')
                            ->maxLength(255),
                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->minValue(0)
                            ->default(0)
                            ->helperText('Angka kecil tampil lebih dulu.'),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->label('Gambar slide')
                            ->image()
                            ->disk('public')
                            ->directory('carousels')
                            ->visibility('public')
                            ->maxSize(4096)
                            ->imagePreviewHeight('180')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Tombol Aksi')
                    ->schema([
                        TextInput::make('cta_label')
                            ->label('Label tombol')
                            ->maxLength(255),
                        TextInput::make('cta_url')
                            ->label('Tujuan tombol')
                            ->maxLength(2048)
                            ->helperText('Boleh path relatif seperti /products atau URL lengkap.'),
                    ])
                    ->columns(2),

                Section::make('Pengaturan Tampilan')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->helperText('Slide nonaktif tidak muncul di halaman utama.')
                            ->default(true),
                    ]),
            ]);
    }
}
