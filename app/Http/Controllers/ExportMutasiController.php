<?php

namespace App\Http\Controllers;

use App\Exports\MutasiExport;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportMutasiController extends Controller
{
    public function index()
	{
		$mutasi = Pembayaran::all();
		return view('mutasi.index',['mutasi'=>$mutasi]);
	}

	public function export_mutasi()
	{
		return Excel::download(new MutasiExport, 'Data-Mutasi.xlsx');
	}
}
