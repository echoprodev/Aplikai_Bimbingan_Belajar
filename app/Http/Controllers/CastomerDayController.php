<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\CustomerDay;
use App\Models\Murid;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;

class CastomerDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = CustomerDay::all();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();

        return view('service.CustomerDay.index',
        [
            'customer' => $customer,
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
        $customer = CustomerDay::all();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $siswa = Murid::where('status', 'aktif')->get();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();

        return view('service.CustomerDay.add',
        [
            'customer' => $customer,
            'data_tentor' => $data_tentor,
            'siswa' => $siswa,
            'data_cabang' => $data_cabang,
            'data_admin' => $data_admin
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
        $CustemerDay = CustomerDay::create([
            'nama_siswa' => $request->nama_siswa,
            'nama_tentor' => $request->nama_tentor,
            'informasi' => $request->informasi,
            'editor' => $request->editor,
        ]);

        return redirect()->route('Customer-Day.index');
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
        $custemer = CustomerDay::find($id);

        return view('service.CustomerDay.edit',
        [
            'custemer' => $custemer
        ]);

        return redirect()->route('Customer-Day.edit');
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
        $up = CustomerDay::findOrFail($id);
        $up->update([
            'nama_siswa' => $request->nama_siswa,
            'nama_tentor' => $request->nama_tentor,
            'informasi' => $request->informasi,
            'editor' => $request->editor,
        ]);

        return redirect()->route('Customer-Day.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $custemer = CustomerDay::find($id);

        $custemer->delete();

        return redirect()->route('Customer-Day.index');
    }
}
