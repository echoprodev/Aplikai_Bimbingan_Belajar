<?php

namespace App\Exports;

use App\Models\Tentor;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TentorExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tentor::all();
    }

    public function headings(): array
    {
        return [
        'ID Database','kode_tentor','nama_tentor','jenis_kelamin', 'lahir','agama','keahlian',
        'pendidikan','alamat','tgl_join','jenjang_mengajar',
        'kd_cabang','status', 'editor', 'Tanggal Input Data', 'Tanggal Update Data'
            ];
    }
}
