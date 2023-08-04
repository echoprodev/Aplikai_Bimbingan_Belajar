<?php

namespace App\Http\Controllers;

use App\Exports\TentorExport;
use App\Http\Controllers\Controller;
use App\Models\Tentor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ExportTentorController extends Controller
{
    public function index()
	{
		$tentor = Tentor::all();
		return view('tentor',['tentor'=>$tentor]);
	}

	public function export_tentor()
	{
		return Excel::download(new TentorExport, 'Data-Tentor.xlsx');
	}
}
