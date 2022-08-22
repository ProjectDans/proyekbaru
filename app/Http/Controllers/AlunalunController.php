<?php

namespace App\Http\Controllers;

use App\Models\Alunalun;
use App\Http\Requests\AlunalunRequest;


use Illuminate\Http\Request;

class AlunalunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunalun = Alunalun::all();
        return view('pedagang.alunalun', compact(
            'alunalun'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunalun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunalunRequest $request)
    {
        // Alunalun::create([
        //     'pedagang' => $request->pedagang,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'agama' => $request->agama,
        //     'telepon' => $request->telepon,
        //     'nik' => $request->nik,
        //     'status_nikah' => $request->status_nikah,
        //     'alamat' => $request->alamat,
        //     'nama_usaha' => $request->nama_usaha,
        //     'wilayah' => 'Alun-alun Kota Cirebon',
        // ]);
        $model = new Alunalun;
        $model->pedagang = $request->pedagang;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->agama = $request->agama;
        $model->telepon = $request->telepon;
        $model->nik = $request->nik;
        $model->status_nikah = $request->status_nikah;
        $model->alamat = $request->alamat;
        $model->nama_usaha = $request->nama_usaha;
        $model->wilayah = 'Alun-alun Kota Cirebon';
        $model->save();
        return redirect('pedagangalunalun')->with('success', 'Data Pedagang Berhasil Dibuat!');
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
        //
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
        //
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
