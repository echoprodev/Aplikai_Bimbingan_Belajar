<?php

namespace App\Http\Controllers;

use App\Models\PayMurid;
use App\Models\PayTentor;
use Illuminate\Http\Request;
use DB;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upah = PayTentor::all();

        return view('Demo.index', [
            'upah' => $upah
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = DB::table('pay_tentor')->select(DB::raw('MAX(RIGHT(kode_transaksi,7)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%07s", $tmp);
            };
        } else {
            $kd = "0000001";
        }

        $siswa = PayMurid::all();
        $gaji = PayTentor::all();

        return view('Demo.add',[
            'kd' => $kd,
            'siswa' => $siswa,
            'gaji' => $gaji
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
            'nama_tentor'           => 'required',
            'periode_bayar'         => 'required',
            'tanggal_bayar'         => 'required',
            'nominal_gaji'          => 'required',
            'keterangan'            => 'required',
            'bukti_bayar'           => 'required',
            'editor'                => 'required',
        ]);

        $img = $request->bukti_bayar;
        $file = $img->getClientOriginalName();

        $data = new PayTentor;
        $data->kode_transaksi        = $request->kode_transaksi;
        $data->nama_tentor           = $request->nama_tentor;
        $data->periode_bayar         = $request->periode_bayar;
        $data->tanggal_bayar         = $request->tanggal_bayar;
        $data->nominal_gaji          = $request->nominal_gaji;
        $data->keterangan            = $request->keterangan;
        $data->bukti_bayar           = $file;
        $data->editor                = $request->editor;


        $img->move(public_path('BuktiBayar/Tentor/'), $file);
        $data->save();

        return redirect()->route('Demo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuinate\Http\Response
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
        $gaji = PayTentor::find($id);

        return view('payment.payTentor.edit',[
            'gaji' => $gaji
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
        $data = PayTentor::findorfail($id);
        $file = $data->bukti_bayar;

        $up = [
        'kode_transaksi'        => $request['kode_transaksi'],
        'nama_tentor'           => $request['nama_tentor'],
        'periode_bayar'         => $request['periode_bayar'],
        'tanggal_bayar'         => $request['tanggal_bayar'],
        'nominal_gaji'          => $request['nominal_gaji'],
        'keterangan'            => $request['keterangan'],
        'bukti_bayar'           => $file,
        'editor'                => $request['editor']
        ];

        $request->bukti_bayar->move(public_path().'BuktiBayar/Tentor/', $file);
        $data->update($up);

        // $gaji = $request->all();
        // $gaji = PayTentor::findOrFail($id);

        // $gaji->update([
        //     'kode_transaksi'        => $request->kode_transaksi,
        //     'nama_tentor'           => $request->nama_tentor,
        //     'periode_bayar'         => $request->periode_bayar,
        //     'tanggal_bayar'         => $request->tanggal_bayar,
        //     'nominal_gaji'          => $request->nominal_gaji,
        //     'keterangan'            => $request->keterangan,
        //     'bukti_bayar'           => $request->bukti_bayar,
        //     'editor'                => $request->editor,
        // ]);

        return redirect()->route('Fee-Tentor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji = PayTentor::find($id);

        $file = public_path('BuktiBayar/Tentor/'.$gaji->bukti_bayar);

        if (file_exists($file)) {
            @unlink($file);
        }

        $gaji->delete();

        return redirect()->route('Fee-Tentor.index');
    }
}