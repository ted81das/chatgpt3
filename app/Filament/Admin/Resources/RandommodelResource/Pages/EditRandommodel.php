<?php

namespace App\Filament\Admin\Resources\RandommodelResource\Pages;

use App\Filament\Admin\Resources\RandommodelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRandommodel extends EditRecord
{
    protected static string $resource = RandommodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
