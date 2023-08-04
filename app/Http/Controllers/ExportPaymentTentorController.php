<?php

namespace App\Http\Controllers;

use App\Exports\PaymentTentor;
use App\Models\PayTentor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportPaymentTentorController extends Controller
{
    public function index()
	{
		$payment = PayTentor::all();
		return view('payment.payTentor.index',[
            'payment' => $payment
        ]);
	}
    public function export_payment()
    {
        return Excel::download(new PaymentTentor, 'Pembayaran-Tentor.xlsx');
    }
}
