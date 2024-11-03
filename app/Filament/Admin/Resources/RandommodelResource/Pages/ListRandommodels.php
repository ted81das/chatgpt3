<?php

namespace App\Filament\Admin\Resources\RandommodelResource\Pages;

use App\Filament\Admin\Resources\RandommodelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRandommodels extends ListRecords
{
    protected static string $resource = RandommodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
