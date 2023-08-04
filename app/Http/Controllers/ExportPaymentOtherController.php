<?php

namespace App\Http\Controllers;

use App\Exports\PaymentOther;
use App\Models\PayOther;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportPaymentOtherController extends Controller
{
    public function index()
	{
		$payment = PayOther::all();
		return view('payment.payOther.index',[
            'payment' => $payment
        ]);
	}
    public function export_payment()
    {
        return Excel::download(new PaymentOther, 'Pembayaran-Lainnya.xlsx');
    }
}
