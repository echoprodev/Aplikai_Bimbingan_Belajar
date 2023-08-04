<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\Pembayaran;
use App\Models\Tentor;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();
        $mutasi = Pembayaran::all();
        $murid = Murid::all();
        return view(
            'mutasi.index',
            [
                'data_tentor' => $data_tentor,
                'data_cabang' => $data_cabang,
                'data_admin' => $data_admin,
                'data_murid' => $data_murid,
                'mutasi' => $mutasi,
                'murid' => $murid
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
        // kode otomatis
        $kode = DB::table('pembayaran')->select(DB::raw('MAX(RIGHT(kode_pembayaran,3)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            };
        } else {
            $kd = "001";
        }

        $murid = Murid::all();
        $mutasi = Pembayaran::all();
        return view('mutasi.add',[
            'kd' => $kd,
            'mutasi' => $mutasi,
            'murid' => $murid

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
        $this->validate($request,[
            'kode_pembayaran' => 'required',
            'kode_siswa' => 'required',
            'nama_siswa' => 'required',
            'nama_tentor' => 'required',
            'periode_pembayaran' => 'required',
            'tanggal_pembayaran' => 'required',
            'nominal_pembayaran' => 'required',
            'tanggal_gajihan' => 'required',
            'nominal_gajih' => 'required',
            'editor' => 'required',
        ]);

        $mutasi = Pembayaran::create([
            'kode_pembayaran' => $request->kode_pembayaran,
            'kode_siswa' => $request->kode_siswa,
            'nama_siswa' => $request->nama_siswa,
            'nama_tentor' => $request->nama_tentor,
            'periode_pembayaran' => $request->periode_pembayaran,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'tanggal_gajihan' => $request->tanggal_gajihan,
            'nominal_gajih' => $request->nominal_gajih,
            'editor' => $request->editor,
        ]);
        return redirect()->route('Pembayaran.index');
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
        // kode otomatis
        $kode = DB::table('pembayaran')->select(DB::raw('MAX(RIGHT(kode_pembayaran,3)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            };
        } else {
            $kd = "001";
        }

        $murid = Murid::find($id);
        $mutasi = Pembayaran::all();
        return view('mutasi.add',[
            'kd' => $kd,
            'mutasi' => $mutasi,
            'murid' => $murid

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
        $murid = $request->all();
        $murid = Murid::findOrFail($id);
        $murid->update([
            'kode_siswa'      => $request->kode_siswa,
            'nama_siswa'      => $request->nama_siswa,
            'alamat_rumah'      => $request->alamat_rumah,
            'nama_tentor'       => $request->nama_tentor,
            'status'            => $request->status,
            'editor'           => $request->editor,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
