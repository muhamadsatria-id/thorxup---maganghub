<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use App\Models\Inquiry;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pemohon')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('company')
                            ->label('Instansi / tim')
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->label('Telepon / WhatsApp')
                            ->tel()
                            ->required()
                            ->maxLength(50),
                    ])
                    ->columns(2),

                Section::make('Kebutuhan')
                    ->schema([
                        Select::make('product_id')
                            ->label('Produk')
                            ->relationship('product', 'name')
                            ->searchable()
                            ->preload()
                            ->placeholder('Tanpa produk tertentu'),
                        TextInput::make('quantity')
                            ->label('Jumlah')
                            ->numeric()
                            ->minValue(1),
                        TextInput::make('subject')
                            ->label('Subjek')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('message')
                            ->label('Pesan')
                            ->rows(5)
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Tindak Lanjut')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options(Inquiry::STATUSES)
                            ->default('new')
                            ->required()
                            ->native(false),
                        Textarea::make('admin_notes')
                            ->label('Catatan admin')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
