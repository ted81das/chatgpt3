<?php

namespace App\Filament\Admin\Resources\MensResource\Pages;

use App\Filament\Admin\Resources\MensResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMens extends ViewRecord
{
    protected static string $resource = MensResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
