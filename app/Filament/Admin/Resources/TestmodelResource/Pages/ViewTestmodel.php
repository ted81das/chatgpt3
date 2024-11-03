<?php

namespace App\Filament\Admin\Resources\TestmodelResource\Pages;

use App\Filament\Admin\Resources\TestmodelResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTestmodel extends ViewRecord
{
    protected static string $resource = TestmodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
