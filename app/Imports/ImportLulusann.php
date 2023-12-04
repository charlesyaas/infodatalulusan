<?php

namespace App\Imports;

use App\Models\Lulusan;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportLulusann implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Lulusan([
            'jenjang' =>  $row[0],
            'tahun_lulus' =>  $row[1],
            'nama'  =>  $row[2],
            'tempat_lahir'  =>  $row[3],
            'tanggal_lahir'  => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]),
            'orang_tua'  =>  $row[5],
            'no_peserta_un'  =>  $row[6],
        ]);
    }
}
