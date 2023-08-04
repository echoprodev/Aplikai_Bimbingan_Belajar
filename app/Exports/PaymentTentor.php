<?php

namespace App\Exports;

use App\Models\PayTentor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PaymentTentor implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PayTentor::all();
    }

    public function headings(): array
    {
        return [
        'ID Database', 'kode_transaksi', 'nama_tentor','periode_bayar','tanggal_bayar',
        'nominal_gaji', 'status_bayar','editor', 'Tanggal Input Data', 'Tanggal Edit Data'
            ];
    }
}
