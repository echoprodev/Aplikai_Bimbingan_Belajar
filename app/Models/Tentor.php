<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentor extends Model
{
    use HasFactory;

    protected $table = 'tentor';

    protected $fillable =
    [
        'kode_tentor','nama_tentor','jenis_kelamin', 'lahir','agama','keahlian',
        'pendidikan','alamat','tgl_join','jenjang_mengajar',
        'kd_cabang','status', 'editor'
    ];

    protected $hidden = [];

    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'kd_cabang', 'id');
    }

}
