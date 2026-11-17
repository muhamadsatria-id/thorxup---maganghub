<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Inquiries\InquiryResource;
use App\Models\Inquiry;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestInquiries extends TableWidget
{
    protected static ?int $sort = 2;

    protected static ?bool $isLazyLoaded = false;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Inquiry terbaru')
            ->query(Inquiry::query()->latest())
            ->defaultPaginationPageOption(5)
            ->paginated([5])
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('subject')
                    ->label('Subjek')
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
                    }),
                TextColumn::make('created_at')
                    ->label('Masuk')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->recordActions([
                Action::make('open')
                    ->label('Buka')
                    ->icon(Heroicon::OutlinedArrowTopRightOnSquare)
                    ->url(fn (Inquiry $record): string => InquiryResource::getUrl('view', ['record' => $record])),
            ])
            ->headerActions([
                Action::make('viewAll')
                    ->label('Lihat semua')
                    ->url(InquiryResource::getUrl()),
            ]);
    }
}
