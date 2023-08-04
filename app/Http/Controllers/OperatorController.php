<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
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
        $operator = User::all();
        return view(
            'operator.index',
            [
                'data_tentor' => $data_tentor,
                'data_cabang' => $data_cabang,
                'data_murid' => $data_murid,
                'data_admin' => $data_admin,
                'operator' => $operator
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
        $operator = User::all();

        return view('operator.add',[
            'operator' => $operator
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $operator = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect()->route('operator.index');
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
        $operator = User::find($id);

        return view('operator.edit', [
            'operator' => $operator
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
        $operator = User::findOrFail($id);

        $operator->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return redirect()->route('operator.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operator = User::find($id);

        $operator->delete();

        return redirect()->route('operator.index');
    }
}
