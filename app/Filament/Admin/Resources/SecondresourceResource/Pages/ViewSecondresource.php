<?php

namespace App\Filament\Admin\Resources\SecondresourceResource\Pages;

use App\Filament\Admin\Resources\SecondresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSecondresource extends ViewRecord
{
    protected static string $resource = SecondresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
