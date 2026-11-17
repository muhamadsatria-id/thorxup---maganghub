<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Berita')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        RichEditor::make('content')
                            ->label('Isi berita')
                            ->columnSpanFull(),
                    ]),

                Section::make('Media & Publikasi')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar utama')
                            ->image()
                            ->disk('public')
                            ->directory('news')
                            ->visibility('public')
                            ->maxSize(4096)
                            ->imagePreviewHeight('180')
                            ->columnSpanFull(),
                        TextInput::make('author')
                            ->label('Penulis')
                            ->maxLength(255)
                            ->default(fn (): ?string => auth()->user()?->name),
                        DatePicker::make('published_at')
                            ->label('Tanggal terbit')
                            ->helperText('Kosongkan untuk menyimpan sebagai draft.')
                            ->native(false)
                            ->displayFormat('d M Y'),
                    ])
                    ->columns(2),
            ]);
    }
}
