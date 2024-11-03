<?php

namespace App\Filament\Dashboard\Resources\CloudServerResource\Pages;

use App\Filament\Dashboard\Resources\CloudServerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCloudServers extends ListRecords
{
    protected static string $resource = CloudServerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
