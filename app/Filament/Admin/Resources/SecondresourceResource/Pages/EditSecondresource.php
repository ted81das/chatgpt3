<?php

namespace App\Filament\Admin\Resources\SecondresourceResource\Pages;

use App\Filament\Admin\Resources\SecondresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecondresource extends EditRecord
{
    protected static string $resource = SecondresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
