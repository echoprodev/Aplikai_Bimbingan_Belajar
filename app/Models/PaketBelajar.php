<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketBelajar extends Model
{
    use HasFactory;

    protected $table = 'paket_belajar';

    protected $fillable =
    [
        'kategori', 'paket', 'kelas', 'harga', 'pertemuan', 'editor'
    ];

    protected $hidden = [];
}
