<?php

namespace App\Filament\Admin\Resources\MensResource\Pages;

use App\Filament\Admin\Resources\MensResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMens extends EditRecord
{
    protected static string $resource = MensResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
