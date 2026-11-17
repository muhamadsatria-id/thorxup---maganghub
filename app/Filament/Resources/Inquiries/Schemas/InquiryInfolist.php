<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use App\Models\Inquiry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pemohon')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Nama'),
                        TextEntry::make('company')
                            ->label('Instansi / tim')
                            ->placeholder('-'),
                        TextEntry::make('email')
                            ->label('Email')
                            ->copyable(),
                        TextEntry::make('phone')
                            ->label('Telepon / WhatsApp')
                            ->copyable(),
                        TextEntry::make('product.name')
                            ->label('Produk')
                            ->placeholder('Tanpa produk tertentu'),
                        TextEntry::make('quantity')
                            ->label('Jumlah')
                            ->placeholder('-'),
                    ])
                    ->columns(2),

                Section::make('Pesan')
                    ->schema([
                        TextEntry::make('subject')
                            ->label('Subjek')
                            ->columnSpanFull(),
                        TextEntry::make('message')
                            ->label('Pesan')
                            ->columnSpanFull(),
                    ]),

                Section::make('Tindak Lanjut')
                    ->schema([
                        TextEntry::make('status')
                            ->label('Status')
                            ->badge()
                            ->formatStateUsing(fn (string $state): string => Inquiry::STATUSES[$state] ?? ucfirst($state))
                            ->color(fn (string $state): string => match ($state) {
                                'new' => 'danger',
                                'read' => 'warning',
                                'replied' => 'info',
                                'closed' => 'success',
                                default => 'gray',
                            }),
                        TextEntry::make('created_at')
                            ->label('Masuk pada')
                            ->dateTime('d M Y H:i'),
                        TextEntry::make('admin_notes')
                            ->label('Catatan admin')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
