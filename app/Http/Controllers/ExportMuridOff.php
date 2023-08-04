<?php

namespace App\Http\Controllers;

use App\Exports\MuridExport;
use App\Exports\MuridOffExport;
use App\Models\SiswaOff;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportMuridOff extends Controller
{
    public function index()
	{
		$murid = SiswaOff::all();
		return view('siswa.index_siswaoff',['murid'=>$murid]);
	}
    public function export_muridoff()
    {
        return Excel::download(new MuridOffExport, 'Data-Murid-Off.xlsx');
    }
}
