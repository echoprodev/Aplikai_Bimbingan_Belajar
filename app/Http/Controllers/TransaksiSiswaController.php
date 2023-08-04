<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class TransaksiSiswaController extends Controller
{
    public function transaksi($id)
    {
        $siswa = Murid::find($id);

        return view('payment.payMurid.add',[
            'siswa' => $siswa
        ]);
    }

    public function data(Request $request, $id)
    {
        # code...
    }
}
