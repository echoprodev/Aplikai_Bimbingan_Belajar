<?php

namespace App\Exports;

use App\Models\PayMurid;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PaymentSiswaExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PayMurid::all();
    }

    public function headings(): array
    {
        return [
        'ID Database','kode_transaksi','nama_siswa', 'nama_tentor','periode_bayar','tanggal_bayar',
        'nominal_bayar', 'keterangan','bukti_bayar', 'editor', 'Tanggal Input Data', 'Tanggal Edit Data'
            ];
    }
}
