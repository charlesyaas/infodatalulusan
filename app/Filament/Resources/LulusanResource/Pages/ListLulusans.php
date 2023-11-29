<?php

namespace App\Filament\Resources\LulusanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\LulusanResource;
use EightyNine\ExcelImport\ExcelImportAction;

class ListLulusans extends ListRecords
{
    protected static string $resource = LulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExcelImportAction::make()
                ->color("primary"),
            Actions\CreateAction::make(),

        ];
    }
}
