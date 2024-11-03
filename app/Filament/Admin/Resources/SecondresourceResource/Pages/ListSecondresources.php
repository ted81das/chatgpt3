<?php

namespace App\Filament\Admin\Resources\SecondresourceResource\Pages;

use App\Filament\Admin\Resources\SecondresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSecondresources extends ListRecords
{
    protected static string $resource = SecondresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
