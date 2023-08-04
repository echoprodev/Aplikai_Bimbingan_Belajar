<?php

namespace App\Http\Controllers;

use App\Exports\PaymentSiswaExport;
use App\Models\PayMurid;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportPaymentSIswaController extends Controller
{
    public function index()
	{
		$payment = PayMurid::all();
		return view('payment.payMurid.index',[
            'payment' => $payment
        ]);
	}
    public function export_payment()
    {
        return Excel::download(new PaymentSiswaExport, 'Pembayaran-Siswa.xlsx');
    }
}
