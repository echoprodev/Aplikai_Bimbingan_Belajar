<?php

namespace App\Exports;

use App\Models\Pembayaran;use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MutasiExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pembayaran::all();
    }

    public function headings(): array
    {
        return [
        'ID Database','kode_pembayaran',
        'kode siswa',
        'nama siswa',
        'nama tentor',
        'periode pembayaran',
        'tanggal pembayaran',
        'nominal pembayaran',
        'status embayaran',
        'tanggal gajihan',
        'nominal gajih',
        'status gajih',
        'editor', 'Tanggal Input Data', 'Tanggal Update Data'
            ];
    }
}
