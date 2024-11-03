<?php

namespace App\Filament\Admin\Resources\TestmodelResource\Pages;

use App\Filament\Admin\Resources\TestmodelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestmodel extends EditRecord
{
    protected static string $resource = TestmodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
