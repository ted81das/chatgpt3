<?php

namespace App\Filament\Admin\Resources\TestmodelResource\Pages;

use App\Filament\Admin\Resources\TestmodelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestmodels extends ListRecords
{
    protected static string $resource = TestmodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
