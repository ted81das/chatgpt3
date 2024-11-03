<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SecondresourceResource\Pages;
use App\Filament\Admin\Resources\SecondresourceResource\RelationManagers;
use App\Models\Secondresource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SecondresourceResource extends Resource
{
    protected static ?string $model = Secondresource::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
Forms\Components\TextInput::make('name')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
Tables\Columns\TextColumn::make('name')->sortable()->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSecondresources::route('/'),
            'create' => Pages\CreateSecondresource::route('/create'),
            'view' => Pages\ViewSecondresource::route('/{record}'),
            'edit' => Pages\EditSecondresource::route('/{record}/edit'),
        ];
    }
}
