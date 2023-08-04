<?php

namespace App\Exports;

use App\Models\Murid;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class MuridExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Murid::all();
    }

    public function headings(): array
    {
        return [
        'ID Database','kode_siswa','nama_siswa','lahir', 'jenis_kelamin', 'asal_sekolah','kelas','no_hp',
        'sumber_info', 'alamat_rumah','wali_siswa', 'nama_tentor', 'jadwal_les', 'jumlah_pertemuan' ,
        'pembayaran', 'tgl_join', 'status', 'editor', 'Tanggal Input Data', 'Tanggal Edit Data'
            ];
    }
}
