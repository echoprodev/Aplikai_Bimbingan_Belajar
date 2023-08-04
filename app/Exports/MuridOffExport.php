<?php

namespace App\Exports;

use App\Models\SiswaOff;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MuridOffExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SiswaOff::all();
    }

    public function headings(): array
    {
        return [
        'ID Database', 'nama_siswa', 'nama_tentor', 'keterangan', 'tgl_off',  'editor', 'Tanggal Input Data', 'Tanggal Edit Data'
            ];
    }
}
