<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentorDay extends Model
{
    use HasFactory;

    protected $table = 'tentor_day';

    protected $fillable =
    [
        'nama_siswa', 'nama_tentor', 'informasi', 'editor'
    ];

    protected $hidden = [];
}
