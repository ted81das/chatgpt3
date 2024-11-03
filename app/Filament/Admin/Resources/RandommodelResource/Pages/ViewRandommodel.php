<?php

namespace App\Filament\Admin\Resources\RandommodelResource\Pages;

use App\Filament\Admin\Resources\RandommodelResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRandommodel extends ViewRecord
{
    protected static string $resource = RandommodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
