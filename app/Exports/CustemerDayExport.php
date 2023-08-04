<?php

namespace App\Exports;

use App\Models\CustomerDay;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustemerDayExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CustomerDay::all();
    }

    public function headings(): array
    {
        return [
        'ID Database', 'nama_siswa', 'nama_tentor', 'informasi', 'editor', 'Tanggal Input Data', 'Tanggal Edit Data'
            ];
    }
}
