<?php

namespace App\Filament\Resources\News\Tables;

use App\Models\News;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class NewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('published_at', 'desc')
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->getStateUsing(fn (News $record): ?string => $record->imageUrl())
                    ->square()
                    ->imageSize(44),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->getStateUsing(fn (News $record): string => $record->published_at && $record->published_at->isPast() ? 'Terbit' : 'Draft')
                    ->color(fn (string $state): string => $state === 'Terbit' ? 'success' : 'warning'),
                TextColumn::make('author')
                    ->label('Penulis')
                    ->searchable()
                    ->placeholder('-'),
                TextColumn::make('published_at')
                    ->label('Tanggal terbit')
                    ->dateTime('d M Y')
                    ->placeholder('Draft')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'published' => 'Terbit',
                        'draft' => 'Draft',
                    ])
                    ->query(function ($query, array $data) {
                        if (($data['value'] ?? null) === 'published') {
                            $query->whereNotNull('published_at')->where('published_at', '<=', now());
                        }

                        if (($data['value'] ?? null) === 'draft') {
                            $query->where(fn ($query) => $query
                                ->whereNull('published_at')
                                ->orWhere('published_at', '>', now()));
                        }
                    }),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
