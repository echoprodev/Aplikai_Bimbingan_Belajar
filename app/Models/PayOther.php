<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayOther extends Model
{
    use HasFactory;
    protected $table = 'pay_other';

    protected $fillable =
    [
        'kode_transaksi','kategori_bayar','periode_bayar','tanggal_bayar',
        'nominal_bayar', 'ketrangan','bukti_bayar','editor'
    ];

    protected $hidden = [];

}
