<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    protected $table = 'cabang';

    protected $fillable =
    [
        'kode_cabang','wilayah_cabang','alamat_cabang','editor'
    ];

    protected $hidden = [];
}
