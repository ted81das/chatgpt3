<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RandommodelResource\Pages;
use App\Filament\Admin\Resources\RandommodelResource\RelationManagers;
use App\Models\Randommodel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RandommodelResource extends Resource
{
    protected static ?string $model = Randommodel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
Forms\Components\TextInput::make('description')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
Tables\Columns\TextColumn::make('description')->sortable()->searchable()
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
            'index' => Pages\ListRandommodels::route('/'),
            'create' => Pages\CreateRandommodel::route('/create'),
            'view' => Pages\ViewRandommodel::route('/{record}'),
            'edit' => Pages\EditRandommodel::route('/{record}/edit'),
        ];
    }
}
