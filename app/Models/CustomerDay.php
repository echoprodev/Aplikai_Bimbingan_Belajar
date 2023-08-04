<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDay extends Model
{
    use HasFactory;

    protected $table = 'customer_day';

    protected $fillable =
    [
        'nama_siswa', 'nama_tentor', 'informasi', 'editor'
    ];

    protected $hidden = [];


}
