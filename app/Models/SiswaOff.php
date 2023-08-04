<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaOff extends Model
{
    use HasFactory;

    protected $table = 'siswa_off';

    protected $fillable =
    [
        'nama_siswa','nama_tentor','keterangan','tgl_off', 'editor'
    ];

    protected $hidden = [];

    public function tentor()
    {
        return $this->belongsTo(Tentor::class);
    }
}
