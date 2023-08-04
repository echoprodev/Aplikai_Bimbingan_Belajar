<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class CabangConntroller extends Controller
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
        $cabang = Cabang::all();
        return view('cabang.index', [
            'data_tentor' => $data_tentor,
            'data_murid' => $data_murid,
            'data_cabang' => $data_cabang,
            'data_admin' => $data_admin,
            'cabang' => $cabang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = DB::table('cabang')->select(DB::raw('MAX(RIGHT(kode_cabang,3)) as kode'));
        $kd = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            };
        } else {
            $kd = "001";
        }
        $cabang = Cabang::all();

        return view('cabang.add', [
            'cabang' => $cabang,
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
        $this->validate($request,[
            'kode_cabang' => 'required',
            'wilayah_cabang' => 'required',
            'alamat_cabang' => 'required'
         ]);
        $cabang = Cabang::create([
            'kode_cabang'=> $request->kode_cabang,
            'wilayah_cabang' => $request->wilayah_cabang,
            'alamat_cabang' => $request->alamat_cabang,
            'editor' => $request->editor,
        ]);

        return redirect()->route('cabang.index');
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
        $cabang = Cabang::find($id);

        return view('cabang.edit', compact('cabang'));
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
        $cabang = Cabang::findOrFail($id);

        $cabang->update([
            'kode_cabang'=> $request->kode_cabang,
            'wilayah_cabang' => $request->wilayah_cabang,
            'alamat_cabang' => $request->alamat_cabang,
            'editor' => $request->editor,
        ]);
        return redirect()->route('cabang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cabang = Cabang::find($id);

        $cabang->delete();

        return redirect()->route('cabang.index');
    }
}
