<?php

namespace App\Filament\RagChat\Resources\RagChatResource\Pages;

use App\Filament\RagChat\Resources\RagChatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRagChat extends EditRecord
{
    protected static string $resource = RagChatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
