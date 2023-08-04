<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';

    protected $fillable =
    [
        'kode_siswa','nama_siswa','lahir', 'jenis_kelamin', 'asal_sekolah','kelas','no_hp',
        'sumber_info', 'alamat_rumah','wali_siswa', 'nama_tentor', 'jadwal_les', 'jumlah_pertemuan' ,
        'pembayaran', 'tgl_join', 'status', 'editor'
    ];

    protected $hidden = [];

    public function tentor()
    {
        return $this->belongsTo(Tentor::class);
    }

    public function paket()
    {
        return $this->belongsTo(PaketBelajar::class);
    }
}
