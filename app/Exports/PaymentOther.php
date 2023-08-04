<?php

namespace App\Exports;

use App\Models\PayOther;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PaymentOther implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PayOther::all();
    }

    public function headings(): array
    {
        return [
        'ID Database','kode_transaksi', 'nominal_bayar', 'kategori_bayar','periode_bayar','tanggal_bayar',
         'ketrangan','bukti_bayar','editor', 'Tanggal Input Data', 'Tanggal Edit Data'
            ];
    }
}
