<?php

namespace App\Http\Controllers;

use App\Exports\MuridExport;
use App\Http\Controllers\Controller;
use App\Models\Murid;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportMuridController extends Controller
{
    public function index()
	{
		$murid = Murid::all();
		return view('siswa.index',['murid'=>$murid]);
	}
    public function export_murid()
    {
        return Excel::download(new MuridExport, 'Data-Murid.xlsx');
    }
}
