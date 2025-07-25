<?php

namespace App\Filament\Resources\CharacterisitcResource\Pages;

use App\Filament\Resources\CharacterisitcResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCharacterisitcs extends ListRecords
{
    protected static string $resource = CharacterisitcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
