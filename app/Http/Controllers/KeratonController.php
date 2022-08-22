<?php

namespace App\Http\Controllers;

use App\Models\Keraton;
use Illuminate\Http\Request;

class KeratonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keraton = Keraton::all();
        return view('pedagang.keraton', compact(
            'keraton'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keraton.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Keraton::create([
            'pedagang' => $request->pedagang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'telepon' => $request->telepon,
            'nik' => $request->nik,
            'status_nikah' => $request->status_nikah,
            'alamat' => $request->alamat,
            'nama_usaha' => $request->nama_usaha,
            'wilayah' => 'Alun-alun Keraton Kasepuhan',
        ]);
        return redirect('pedagangkeraton')->with('success', 'Data Pedagang Berhasil Dibuat!');
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
        $keraton = Keraton::findorfail($id);
        return view('keraton.edit', compact(
            'keraton'
        ));
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
        $keraton = Keraton::findorfail($id);
        $keraton->update($request->all());

        return redirect('pedagangkeraton')->with('success', 'Akses Akun Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keraton = Keraton::findorfail($id);
        $keraton->delete();
        return redirect('pedagangkeraton')->with('success', 'Data Berhasil Dihapus!');
    }
}
