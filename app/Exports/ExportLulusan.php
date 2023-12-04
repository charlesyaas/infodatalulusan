<?php

namespace App\Exports;

use App\Models\Lulusan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportLulusan implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lulusan::all();
    }

    public function map($invoice): array
    {
        return [
            $invoice->jenjang,
            $invoice->tahun_lulus,
            $invoice->rental_retribution,
            $invoice->nama,
            $invoice->tempat_lahir,
            $invoice->tanggal_lahir,
            $invoice->orang_tua,
            $invoice->no_peserta_un
        ];
    }

    public function headings(): array
    {
        return [
            'Jenjang',
            'Tahun Lulus',
            'Nama Penggunaan',
            'Nama',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Nama Orang Tua',
            'Nomor Perserta UN'

        ];
    }
}
