<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\PayMurid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class PayMuridControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paySiswa = PayMurid::all();

        return view('payment.payMurid.index',[
            'paySiswa' => $paySiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = DB::table('pay_murid')->select(DB::raw('MAX(RIGHT(kode_transaksi,7)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%07s", $tmp);
            };
        } else {
            $kd = "0000001";
        }

        $paySiswa = PayMurid::all();
        $siswa = Murid::all();

        return view('payment.payMurid.add',[
            'kd' => $kd,
            'siswa' => $siswa,
            'paySiswa' => $paySiswa
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
            'nama_siswa'            => 'required',
            'nama_tentor'           => 'required',
            'periode_bayar'         => 'required',
            'tanggal_bayar'         => 'required',
            'nominal_bayar'         => 'required',
            'keterangan'            => 'required',
            'bukti_bayar'           => 'required',
            'editor'                => 'required',
        ]);

        $img = $request->bukti_bayar;
        $name_file = $img->getClientOriginalName();

        $file = new PayMurid;
        $file->kode_transaksi        = $request->kode_transaksi;
        $file->nama_siswa            = $request->nama_siswa;
        $file->nama_tentor           = $request->nama_tentor;
        $file->periode_bayar         = $request->periode_bayar;
        $file->tanggal_bayar         = $request->tanggal_bayar;
        $file->nominal_bayar         = $request->nominal_bayar;
        $file->keterangan            = $request->keterangan;
        $file->bukti_bayar           = $name_file;
        $file->editor                = $request->editor;

        $img->move(public_path('BuktiBayar/Siswa/'), $name_file);
        $file->save();

        return redirect()->route('Pembayaran-Siswa.index');
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
        $siswa = PayMurid::find($id);

        return view('payment.payMurid.edit',[
            'siswa' => $siswa
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
        $data = PayMurid::findorfail($id);
        $file = $data->bukti_bayar;

        $up = [
        'kode_transaksi'        => $request['kode_transaksi'],
        'nama_siswa'            => $request['nama_siswa'],
        'periode_bayar'         => $request['periode_bayar'],
        'tanggal_bayar'         => $request['tanggal_bayar'],
        'nominal_bayar'         => $request['nominal_bayar'],
        'keterangan'            => $request['keterangan'],
        'bukti_bayar'           => $file,
        'editor'                => $request['editor']
        ];

        $request->bukti_bayar->move(public_path('BuktiBayar/Siswa/'), $file);
        $data->update($up);

        return redirect()->route('Pembayaran-Siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = PayMurid::find($id);

        $file = public_path('BuktiBayar/Siswa/'.$siswa->bukti_bayar);

        if (file_exists($file)) {
            @unlink($file);
        }

        $siswa->delete();

        return redirect()->route('Pembayaran-Siswa.index');
    }
}
