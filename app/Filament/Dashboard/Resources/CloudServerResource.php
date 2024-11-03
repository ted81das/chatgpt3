<?php

namespace App\Filament\Dashboard\Resources;

use App\Filament\Dashboard\Resources\CloudServerResource\Pages;
use App\Filament\Dashboard\Resources\CloudServerResource\RelationManagers;
use App\Models\CloudServer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CloudServerResource extends Resource
{
    protected static ?string $model = CloudServer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('serverorderid')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('clientbillingorderid')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('serverserverid')
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('credential')
                    ->numeric(),
                Forms\Components\TextInput::make('plan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('region')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cloud_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('database_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('webserver_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('os_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('php_version')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('install_monitoring')
                    ->maxLength(255),
                Forms\Components\TextInput::make('webhook_url')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('serverorderid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('clientbillingorderid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serverserverid')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('credential')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('plan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('region')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cloud_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('database_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('webserver_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('os_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('php_version')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('install_monitoring')
                    ->searchable(),
                Tables\Columns\TextColumn::make('webhook_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListCloudServers::route('/'),
            'create' => Pages\CreateCloudServer::route('/create'),
            'edit' => Pages\EditCloudServer::route('/{record}/edit'),
        ];
    }
}
