<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Berita')
                    ->schema([
                        TextEntry::make('title')
                            ->label('Judul')
                            ->columnSpanFull(),
                        TextEntry::make('author')
                            ->label('Penulis')
                            ->placeholder('-'),
                        TextEntry::make('published_at')
                            ->label('Tanggal terbit')
                            ->dateTime('d M Y')
                            ->placeholder('Draft'),
                        ImageEntry::make('image')
                            ->label('Gambar utama')
                            ->disk('public')
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('content')
                            ->label('Isi berita')
                            ->html()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Metadata')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Dibuat')
                            ->dateTime('d M Y H:i'),
                        TextEntry::make('updated_at')
                            ->label('Diperbarui')
                            ->dateTime('d M Y H:i'),
                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }
}
