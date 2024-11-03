<?php

namespace App\Filament\Dashboard\Resources\CloudServerResource\Pages;

use App\Filament\Dashboard\Resources\CloudServerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCloudServer extends EditRecord
{
    protected static string $resource = CloudServerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
