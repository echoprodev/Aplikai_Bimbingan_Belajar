<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\PaketBelajar;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class MuridController extends Controller
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
        $murid = Murid::all();
        return view(
            'siswa.index',
            [
                'data_tentor' => $data_tentor,
                'data_cabang' => $data_cabang,
                'data_admin' => $data_admin,
                'data_murid' => $data_murid,
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
        $kode = DB::table('murid')->select(DB::raw('MAX(RIGHT(kode_siswa,4)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%04s", $tmp);
            };
        } else {
            $kd = "00001";
        }

        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();
        $murid = Murid::all();
        $paket = PaketBelajar::all();
        $tentor = Tentor::where('status', 'aktif')->get();
        return view(
            'siswa.add',
            [
                'data_tentor' => $data_tentor,
                'data_cabang' => $data_cabang,
                'data_admin' => $data_admin,
                'data_murid' => $data_murid,
                'murid' => $murid,
                'tentor' => $tentor,
                'kd' => $kd,
                'paket' => $paket
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'kode_siswa'      => 'required',
            'nama_siswa'      => 'required',
            'lahir'             => 'required',
            'jenis_kelamin'     => 'required',
            'asal_sekolah'      => 'required',
            'kelas'             => 'required',
            'no_hp'             => 'required',
            'sumber_info'       => 'required',
            'alamat_rumah'      => 'required',
            'wali_siswa'        => 'required',
            'nama_tentor'       => 'required',
            'jadwal_les'        => 'required',
            'jumlah_pertemuan'  => 'required',
            'pembayaran'        => 'required',
            'tgl_join'          => 'required',
            'status'            => 'required',
            'editor'           => 'required',
            ]
        );

        $murid = Murid::create([
            'kode_siswa'      => $request->kode_siswa,
            'nama_siswa'      => $request->nama_siswa,
            'lahir'             => $request->lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'asal_sekolah'      => $request->asal_sekolah,
            'kelas'             => $request->kelas,
            'no_hp'             => $request->no_hp,
            'sumber_info'       => $request->sumber_info,
            'alamat_rumah'      => $request->alamat_rumah,
            'wali_siswa'        => $request->wali_siswa,
            'nama_tentor'       => $request->nama_tentor,
            'jadwal_les'        => $request->jadwal_les,
            'jumlah_pertemuan'  => $request->jumlah_pertemuan,
            'pembayaran'        => $request->pembayaran,
            'tgl_join'          => $request->tgl_join,
            'status'            => $request->status,
            'editor'           => $request->editor,
        ]);

        return redirect()->route('siswa.index');
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
        $murid = Murid::find($id);
        $tentor = Tentor::all();

        return view('siswa.edit',[
            'murid' =>$murid,
            'tentor' =>$tentor
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

        $this->validate(
            $request,
            [
                'kode_siswa'      => 'required',
            'nama_siswa'      => 'required',
            'lahir'             => 'required',
            'jenis_kelamin'     => 'required',
            'asal_sekolah'      => 'required',
            'kelas'             => 'required',
            'no_hp'             => 'required',
            'sumber_info'       => 'required',
            'alamat_rumah'      => 'required',
            'wali_siswa'        => 'required',
            'nama_tentor'       => 'required',
            'jadwal_les'        => 'required',
            'jumlah_pertemuan'  => 'required',
            'pembayaran'        => 'required',
            'tgl_join'          => 'required',
            'status'            => 'required',
            'editor'           => 'required',
            ]
        );

        $murid->update([
            'kode_siswa'      => $request->kode_siswa,
            'nama_siswa'      => $request->nama_siswa,
            'lahir'             => $request->lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'asal_sekolah'      => $request->asal_sekolah,
            'kelas'             => $request->kelas,
            'no_hp'             => $request->no_hp,
            'sumber_info'       => $request->sumber_info,
            'alamat_rumah'      => $request->alamat_rumah,
            'wali_siswa'        => $request->wali_siswa,
            'nama_tentor'       => $request->nama_tentor,
            'jadwal_les'        => $request->jadwal_les,
            'jumlah_pertemuan'  => $request->jumlah_pertemuan,
            'pembayaran'        => $request->pembayaran,
            'tgl_join'          => $request->tgl_join,
            'status'            => $request->status,
            'editor'           => $request->editor,
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid = Murid::find($id);

        $murid->delete();

        return redirect()->route('siswa.index');
    }
}
