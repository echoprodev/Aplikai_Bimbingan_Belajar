<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\Tentor;
use App\Models\TentorDay;
use App\Models\User;
use Illuminate\Http\Request;

class TentorDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentor = TentorDay::all();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();

        return view('service.TentorDay.index',
        [
            'tentor' => $tentor,
            'data_tentor' => $data_tentor,
            'data_murid' => $data_murid,
            'data_cabang' => $data_cabang,
            'data_admin' => $data_admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tentorDay = TentorDay::all();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $siswa = Murid::where('status', 'aktif')->get();

        return view('service.TentorDay.add',[
            'tentorDay' => $tentorDay,
            'data_tentor' => $data_tentor,
            'siswa' => $siswa
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
        $tentorDay = TentorDay::create([
            'nama_siswa' => $request->nama_siswa,
            'nama_tentor' => $request->nama_tentor,
            'informasi' => $request->informasi,
            'editor' => $request->editor,
        ]);

        return redirect()->route('Tentor-Day.index');
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
        $tentorDay = TentorDay::find($id);

        return view('service.TentorDay.edit',
        [
            'tentorDay' => $tentorDay
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
        $up = $request->all();
        $up = TentorDay::findOrFail($id);
        $up->update([
            'nama_siswa' => $request->nama_siswa,
            'nama_tentor' => $request->nama_tentor,
            'informasi' => $request->informasi,
            'editor' => $request->editor,
        ]);

        return redirect()->route('Tentor-Day.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tentorDay = TentorDay::find($id);

        $tentorDay->delete();

        return redirect()->route('Tentor-Day.index');
    }
}
