<?php

namespace App\Filament\Resources\ProfileBrands\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProfileBrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Brand')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama brand')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('vision')
                            ->label('Visi')
                            ->rows(3)
                            ->columnSpanFull(),
                        Textarea::make('mission')
                            ->label('Misi')
                            ->rows(4)
                            ->helperText('Satu poin misi per baris.')
                            ->columnSpanFull(),
                        Textarea::make('core_values')
                            ->label('Nilai inti')
                            ->rows(3)
                            ->helperText('Satu nilai per baris.')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make('Kontak & Lokasi')
                    ->schema([
                        Textarea::make('alamat')
                            ->label('Alamat')
                            ->rows(2)
                            ->columnSpanFull(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->maxLength(50),
                        TextInput::make('whatsapp')
                            ->label('WhatsApp')
                            ->tel()
                            ->maxLength(50)
                            ->helperText('Boleh diawali 0 atau 62.'),
                        TextInput::make('maps_link')
                            ->label('Link Google Maps')
                            ->url()
                            ->maxLength(2048)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media Sosial')
                    ->description('Isi username saja atau URL lengkap.')
                    ->schema([
                        TextInput::make('instagram')->label('Instagram')->maxLength(255),
                        TextInput::make('facebook')->label('Facebook')->maxLength(255),
                        TextInput::make('youtube')->label('YouTube')->maxLength(255),
                        TextInput::make('tiktok')->label('TikTok')->maxLength(255),
                        TextInput::make('linkedin')->label('LinkedIn')->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Marketplace')
                    ->description('Isi username toko atau URL lengkap.')
                    ->schema([
                        TextInput::make('shopee')->label('Shopee')->maxLength(255),
                        TextInput::make('tokopedia')->label('Tokopedia')->maxLength(255),
                        TextInput::make('bukalapak')->label('Bukalapak')->maxLength(255),
                        TextInput::make('lazada')->label('Lazada')->maxLength(255),
                    ])
                    ->columns(2),
            ]);
    }
}
