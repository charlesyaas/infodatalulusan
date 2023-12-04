<?php

namespace App\Filament\Resources\LulusanResource\Pages;

use Filament\Actions;
use App\Models\Lulusan;
use App\Imports\ImportLulusann;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
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

    public function getHeader(): ?View
    {
        // $data =  Actions\CreateAction::make();
        return view('import');
    }

    public $file = '';

    public function save()
    {

        if($this->file != ''){
            Excel::import(new ImportLulusann(), $this->file);

        }
        // Lulusan::create([
        // 'jenjang' => 'Hello',
        // 'tahun_lulus' => 'Hello',
        // 'nama' => 'Hello',
        // 'tempat_lahir' => 'Hello',
        // 'tanggal_lahir' => '2011/12/12',
        // 'orang_tua' => 'Hello',
        // 'no_peserta_un' => '11',

        // ]);
    }
}
