<?php

namespace App\Http\Controllers;

use App\Models\PaketBelajar;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = PaketBelajar::all();
        return view(
            'pricelist.index',
            [
                'paket' => $paket
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
        return view('pricelist.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $paket = PaketBelajar::create([
            'kategori'          => $request->kategori,
            'paket'             => $request->paket,
            'pertemuan'         => $request->pertemuan,
            'kelas'             => $request->kelas,
            'harga'             => $request->harga,
            'editor'            => $request->editor
        ]);

        return redirect()->route('Price-List.index');
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
        $paket = PaketBelajar::find($id);

        return view(
            'pricelist.edit',
            [
                'paket' => $paket
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
        $paket = PaketBelajar::findOrFail($id);

        $paket->update(
            [
                'kategori'          => $request->kategori,
                'paket'             => $request->paket,
                'pertemuan'         => $request->pertemuan,
                'kelas'             => $request->kelas,
                'harga'             => $request->harga,
                'editor'            => $request->editor
            ]
        );

        return redirect()->route('Price-List.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = PaketBelajar::find($id);

        $paket->delete();

        return redirect()->route('Price-List.index');
    }
}
