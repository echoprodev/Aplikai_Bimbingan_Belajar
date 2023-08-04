<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\SiswaOff;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaOffCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaOFF = SiswaOff::all();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();


        return view(
            'siswa.index_siswaoff',
            [
                'siswaOFF' => $siswaOFF,
                'data_admin' => $data_admin,
                'data_cabang' => $data_cabang,
                'data_murid' => $data_murid,
                'data_tentor' => $data_tentor
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
        $siswaOFF = SiswaOff::all();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();
        $siswa = Murid::where('status', 'aktif')->get();
        $tentor = Tentor::where('status', 'aktif')->get();


        return view(
            'siswa.add_siswaoff',
            [
                'siswaOFF' => $siswaOFF,
                'data_admin' => $data_admin,
                'data_cabang' => $data_cabang,
                'data_murid' => $data_murid,
                'data_tentor' => $data_tentor,
                'siswa' => $siswa,
                'tentor' => $tentor
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
                'nama_siswa'      => 'required',
                'nama_tentor'       => 'required',
                'tgl_off'          => 'required',
                'keterangan'            => 'required',
                'editor'           => 'required',
            ]
        );

        $murid = SiswaOff::create([
            'nama_siswa'      => $request->nama_siswa,
            'nama_tentor'       => $request->nama_tentor,
            'tgl_off'          => $request->tgl_off,
            'keterangan'            => $request->keterangan,
            'editor'           => $request->editor,
        ]);

        return redirect()->route('siswa-off.index');
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
        $siswaOFF = SiswaOff::find($id);
        $tentor = Tentor::where('status', 'aktif')->get();

        return view('siswa.edit_siswaoff',[
            'siswaOFF' => $siswaOFF,
            'tentor'  => $tentor
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
        $siswaOFF = $request->all();
        $siswaOFF = SiswaOff::findOrFail($id);

        $siswaOFF->update([
            'nama_siswa'      => $request->nama_siswa,
            'nama_tentor'     => $request->nama_tentor,
            'tgl_off'         => $request->tgl_off,
            'keterangan'      => $request->keterangan,
            'editor'          => $request->editor,
        ]);

        return redirect()->route('siswa-off.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswaOFF = SiswaOff::find($id);

        $siswaOFF->delete();

        return redirect()->route('siswa-off.index');
    }
}
