<?php

namespace App\Http\Controllers;

use App\Exports\CustemerDayExport;
use App\Models\CustomerDay;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportTentorDayController extends Controller
{
    public function index()
	{
		$custemer = CustomerDay::all();
		return view('siswa.index_siswaoff',['custemer'=>$custemer]);
	}
    public function export_tentorday()
    {
        return Excel::download(new CustemerDayExport, 'Tentor-Day.xlsx');
    }
}
