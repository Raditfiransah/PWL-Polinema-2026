<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('sku')
                ->badge()
                ->color(fn (string $state): string => match (substr($state, 0, 1)) {
                    'L' => 'success',
                    'K' => 'warning',
                    'M' => 'info',
                    'W' => 'danger',
                    default => 'gray',
                }),
                TextColumn::make('price')
                ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                TextColumn::make('stock')
                ->icon('heroicon-o-cube'),
                TextColumn::make('is_active')
                ->badge()
                ->color(fn (bool $state): string => $state ? 'success' : 'danger')
                ->formatStateUsing(fn (bool $state): string => $state ? 'Active' : 'Inactive'),
                ImageColumn::make('image')
                ->disk('public'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
