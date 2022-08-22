<?php

namespace App\Http\Controllers;

use App\Models\Pedagang;
use App\Models\Wilayah;
use App\Models\Alunalun;
use App\Models\Keraton;
use App\Http\Requests\PedagangRequest;

use Illuminate\Http\Request;

class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPedagang = Pedagang::with('wilayah')->get();
        return view('pedagang.index', compact(
            'dtPedagang'
        ));
    }

    public function categories()
    {
        $dtWilayah = Wilayah::all();
        return view('pedagang.categories', compact(
            'dtWilayah'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedagang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedagangRequest $request)
    {
        $dtPedagang = Pedagang::create([
            'pedagang' => $request->pedagang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'telepon' => $request->telepon,
            'nik' => $request->nik,
            'status_nikah' => $request->status_nikah,
            'alamat' => $request->alamat,
            'usaha' => $request->usaha,
            'wilayah_id' => $request->wilayah_id,
        ]);
        // dd($request->all());
        return redirect('pedagang')->with('success', 'Data Pedagang Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keraton = Keraton::findorfail($id);
        $alunalun = Alunalun::findorfail($id);
        if($id == 1){
            return view('pedagang.alunalun', compact('alunalun'));
        } 
        return view('pedagang.keraton', compact('keraton'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtPedagang = Pedagang::findorfail($id);
        return view('pedagang.edit', compact(
            'dtPedagang'
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
        $dtPedagang = Pedagang::findorfail($id);
        $dtPedagang->update($request->all());
        return redirect('pedagang')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPedagang = Pedagang::findorfail($id);
        $dtPedagang->delete();
        return redirect('pedagang')->with('danger', 'Data Berhasil Dihapus!');
    }
}
