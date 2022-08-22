<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use App\Models\Wilayah;
use App\Models\KategoriIuran;
use App\Models\Alunalun;
use App\Models\Keraton;

use Illuminate\Http\Request;

class IuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtIuran = Iuran::with('kategoriiuran')->get();
        return view('iuran.index', compact(
            'dtIuran'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunalun = Alunalun::paginate(5);
        $keraton = Keraton::paginate(5);
        $kategoriiuran = KategoriIuran::all();
        return view('iuran.create', compact(
            'kategoriiuran', 'alunalun', 'keraton'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtIuran = Iuran::create([
            'pedagang' => $request->pedagang,
            'usaha' => $request->usaha,
            'kategoriiuran_id' => $request->kategoriiuran_id,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);
        // dd($request->all());
        return redirect('iuran')->with('success', 'Data Iuran Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dtIuran = Iuran::findorfail($id);
        // return view('iuran.show', compact(
        //     'dtIuran'
        // ));
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
        $dtIuran = Iuran::findorfail($id);
        $dtIuran->delete();
        return redirect('iuran');
    }

    public function cetak()
    {
        $dtIuran = Iuran::with('kategoriiuran')->get();
        return view('iuran.cetak', compact(
            'dtIuran'
        ));
    }
}
