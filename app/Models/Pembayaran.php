<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';

    protected $fillable =
    ['kode_pembayaran',
    'kode_siswa',
    'nama_siswa',
    'nama_tentor',
    'periode_pembayaran',
    'tanggal_pembayaran',
    'nominal_pembayaran',
    'tanggal_gajihan',
    'nominal_gajih',
    'editor'
    ];

    protected $hidden = [];
}

