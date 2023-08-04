<?php

namespace App\Http\Controllers;

use App\Models\PayOther;
use Illuminate\Http\Request;
use DB;

class PayOtherControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayar = PayOther::all();

        return view('payment.payOther.index',[
            'bayar' => $bayar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = DB::table('pay_other')->select(DB::raw('MAX(RIGHT(kode_transaksi,7)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%07s", $tmp);
            };
        } else {
            $kd = "0000001";
        }

        $bayar = PayOther::all();

        return view('payment.payOther.add',[
            'bayar' => $bayar,
            'kd' => $kd
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_transaksi'        => 'required',
            'kategori_bayar'        => 'required',
            'periode_bayar'         => 'required',
            'tanggal_bayar'         => 'required',
            'nominal_bayar'         => 'required',
            'keterangan'            => 'required',
            'bukti_bayar'           => 'required',
            'editor'                => 'required',
        ]);

        $img = $request->bukti_bayar;
        $name_file = $img->getClientOriginalName();

        $file = new PayOther;
        $file->kode_transaksi        = $request->kode_transaksi;
        $file->kategori_bayar        = $request->kategori_bayar;
        $file->periode_bayar         = $request->periode_bayar;
        $file->tanggal_bayar         = $request->tanggal_bayar;
        $file->nominal_bayar         = $request->nominal_bayar;
        $file->keterangan            = $request->keterangan;
        $file->bukti_bayar           = $name_file;
        $file->editor                = $request->editor;

        $img->move(public_path('BuktiBayar/Lainnya/'), $name_file);
        $file->save();

        // $bayar = PayOther::create([
        //     'kode_transaksi'        => $request->kode_transaksi,
        //     'kategori_bayar'        => $request->kategori_bayar,
        //     'periode_bayar'         => $request->periode_bayar,
        //     'tanggal_bayar'         => $request->tanggal_bayar,
        //     'nominal_bayar'         => $request->nominal_bayar,
        //     'keterangan'            => $request->keterangan,
        //     'bukti_bayar'           => $request->bukti_bayar,
        //     'editor'                => $request->editor,
        // ]);

        return redirect()->route('Pembayaran-Lainnya.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $other = PayOther::find($id);

        return view('payment.payOther.edit',[
            'other' => $other
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = PayOther::findorfail($id);
        $file = $data->bukti_bayar;
        

        $up = [
        'kode_transaksi'        => $request['kode_transaksi'],
        'kategori_bayar'        => $request['kategori_bayar'],
        'periode_bayar'         => $request['periode_bayar'],
        'tanggal_bayar'         => $request['tanggal_bayar'],
        'nominal_bayar'         => $request['nominal_bayar'],
        'keterangan'            => $request['keterangan'],
        'bukti_bayar'           => $file,
        'editor'                => $request['editor']
        ];
        
        $request->bukti_bayar->move(public_path('BuktiBayar/Lainnya/'), $file);
        $data->update($up);

        // $bayar = PayOther::create([
        //     'kode_transaksi'        => $request->kode_transaksi,
        //     'kategori_bayar'        => $request->kategori_bayar,
        //     'periode_bayar'         => $request->periode_bayar,
        //     'tanggal_bayar'         => $request->tanggal_bayar,
        //     'nominal_bayar'         => $request->nominal_bayar,
        //     'keterangan'            => $request->keterangan,
        //     'bukti_bayar'           => $request->bukti_bayar,
        //     'editor'                => $request->editor,
        // ]);

        return redirect()->route('Pembayaran-Lainnya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $other = PayOther::find($id);

        $file = public_path('BuktiBayar/Lainnya/'.$other->bukti_bayar);

        if (file_exists($file)) {
            @unlink($file);
        }

        $other->delete();

        return redirect()->route('Pembayaran-Lainnya.index');
    }
}
