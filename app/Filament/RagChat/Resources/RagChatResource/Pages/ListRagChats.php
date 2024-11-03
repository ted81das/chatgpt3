<?php

namespace App\Filament\RagChat\Resources\RagChatResource\Pages;

use App\Filament\RagChat\Resources\RagChatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRagChats extends ListRecords
{
    protected static string $resource = RagChatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
