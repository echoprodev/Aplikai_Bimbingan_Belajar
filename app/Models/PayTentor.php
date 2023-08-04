<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayTentor extends Model
{
    use HasFactory;

    protected $table = 'pay_tentor';

    protected $fillable =
    [
        'kode_transaksi','nama_tentor','periode_bayar','tanggal_bayar',
        'nominal_gaji', 'ketrangan','bukti_bayar','editor'
    ];

    protected $hidden = [];
}
