<?php

namespace App\Filament\Admin\Resources\TestmodelResource\Pages;

use App\Filament\Admin\Resources\TestmodelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestmodel extends CreateRecord
{
    protected static string $resource = TestmodelResource::class;
}
