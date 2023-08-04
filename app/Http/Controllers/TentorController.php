<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class TentorController extends Controller
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
        $tentor = Tentor::all();
        return view(
            'tentor.index',
            [
                'data_tentor' => $data_tentor,
                'data_cabang' => $data_cabang,
                'data_murid' => $data_murid,
                'data_admin' => $data_admin,
                'tentor' => $tentor
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
        $kode = DB::table('tentor')->select(DB::raw('MAX(RIGHT(kode_tentor,3)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%07s", $tmp);
            };
        } else {
            $kd = "00001";
        }

        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $cabang = Cabang::all();
        $tentor = Tentor::all();
        return view(
            'tentor.add',
            [
                'data_tentor' => $data_tentor,
                'tentor' => $tentor,
                'data_cabang' => $data_cabang,
                'cabang' => $cabang,
                'kd' => $kd
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
        $this->validate($request, [
            'kode_tentor'             => 'required',
            'nama_tentor'                  => 'required',
            'jenis_kelamin'         => 'required',
            'lahir'                 => 'required',
            'agama'                 => 'required',
            'keahlian'              => 'required',
            'pendidikan'            => 'required',
            'alamat'                => 'required',
            'tgl_join'              => 'required',
            'jenjang_mengajar'      => 'required',
            'kd_cabang'             => 'required',
            'status'             => 'required',
        ]);

        $tentor = Tentor::create([
            'kode_tentor'           => $request->kode_tentor,
            'nama_tentor'           => $request->nama_tentor,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'lahir'                 => $request->lahir,
            'agama'                 => $request->agama,
            'keahlian'              => $request->keahlian,
            'pendidikan'            => $request->pendidikan,
            'alamat'                => $request->alamat,
            'tgl_join'              => $request->tgl_join,
            'jenjang_mengajar'      => $request->jenjang_mengajar,
            'kd_cabang'             => $request->kd_cabang,
            'status'                => $request->status,
            'editor'               => $request->editor,
        ]);

        return redirect()->route('tentor.index');
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
        $tentor = Tentor::find($id);
        $cabang = Cabang::all();

        return view(
            'tentor.edit',
            [
                'tentor' => $tentor,
                'cabang' => $cabang
            ]
        );
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
        $cabang = $request->all();
        $cabang = Tentor::findOrFail($id);

        $cabang->update([
            'kode_tentor'             => $request->kode_tentor,
            'nama_tentpr'                  => $request->nama_tentor,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'lahir'                 => $request->lahir,
            'agama'                 => $request->agama,
            'keahlian'              => $request->keahlian,
            'pendidikan'            => $request->pendidikan,
            'alamat'                => $request->alamat,
            'tgl_join'              => $request->tgl_join,
            'area_mengajar'         => $request->area_mengajar,
            'jenjang_mengajar'      => $request->jenjang_mengajar,
            'kd_cabang'             => $request->kd_cabang,
            'status'             => $request->status,
            'editor'               => $request->editor,
        ]);
        return redirect()->route('tentor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tentor = Tentor::find($id);

        $tentor->delete();

        return redirect()->route('tentor.index');
    }
}
