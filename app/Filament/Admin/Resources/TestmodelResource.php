<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TestmodelResource\Pages;
use App\Filament\Admin\Resources\TestmodelResource\RelationManagers;
use App\Models\Testmodel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestmodelResource extends Resource
{
    protected static ?string $model = Testmodel::class;

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
            'index' => Pages\ListTestmodels::route('/'),
            'create' => Pages\CreateTestmodel::route('/create'),
            'view' => Pages\ViewTestmodel::route('/{record}'),
            'edit' => Pages\EditTestmodel::route('/{record}/edit'),
        ];
    }
}
