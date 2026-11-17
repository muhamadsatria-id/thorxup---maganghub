<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Akun')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->revealable()
                            ->minLength(8)
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->dehydrated(fn (?string $state): bool => filled($state))
                            ->helperText('Kosongkan saat mengedit jika password tidak diubah.'),
                        DateTimePicker::make('email_verified_at')
                            ->label('Email terverifikasi pada')
                            ->seconds(false),
                    ])
                    ->columns(2),

                Section::make('Hak Akses')
                    ->schema([
                        Toggle::make('is_admin')
                            ->label('Administrator')
                            ->helperText('Hanya administrator yang dapat membuka panel admin.')
                            ->default(false),
                    ]),
            ]);
    }
}
