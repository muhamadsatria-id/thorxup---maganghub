<?php

namespace App\Filament\Resources\Inquiries\Tables;

use App\Models\Inquiry;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class InquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('company')
                    ->label('Instansi')
                    ->searchable()
                    ->placeholder('-')
                    ->toggleable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->toggleable(),
                TextColumn::make('phone')
                    ->label('Telepon')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('product.name')
                    ->label('Produk')
                    ->placeholder('-')
                    ->toggleable(),
                TextColumn::make('quantity')
                    ->label('Jumlah')
                    ->numeric()
                    ->sortable()
                    ->placeholder('-')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('subject')
                    ->label('Subjek')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Inquiry::STATUSES[$state] ?? ucfirst($state))
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'danger',
                        'read' => 'warning',
                        'replied' => 'info',
                        'closed' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Masuk')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options(Inquiry::STATUSES),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                Action::make('markAsRead')
                    ->label('Tandai dibaca')
                    ->icon(Heroicon::OutlinedCheck)
                    ->color('gray')
                    ->visible(fn (Inquiry $record): bool => $record->status === 'new')
                    ->action(fn (Inquiry $record) => $record->update(['status' => 'read'])),
                Action::make('replyByEmail')
                    ->label('Balas via email')
                    ->icon(Heroicon::OutlinedEnvelope)
                    ->url(fn (Inquiry $record): string => 'mailto:'.$record->email.'?subject='.urlencode('Re: '.$record->subject))
                    ->openUrlInNewTab()
                    ->visible(fn (Inquiry $record): bool => filled($record->email)),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
