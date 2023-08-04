<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayMurid extends Model
{
    use HasFactory;
    protected $table = 'pay_murid';

    protected $fillable =
    [
        'kode_transaksi','nama_siswa', 'nama_tentor','periode_bayar','tanggal_bayar',
        'nominal_bayar', 'keterangan','bukti_bayar', 'editor'
    ];

    protected $hidden = [];
}
