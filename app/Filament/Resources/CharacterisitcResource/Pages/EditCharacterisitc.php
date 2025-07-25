<?php

namespace App\Filament\Resources\CharacterisitcResource\Pages;

use App\Filament\Resources\CharacterisitcResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCharacterisitc extends EditRecord
{
    protected static string $resource = CharacterisitcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
