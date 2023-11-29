<?php

namespace App\Filament\Resources\LulusanResource\Pages;

use App\Filament\Resources\LulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLulusan extends EditRecord
{
    protected static string $resource = LulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
