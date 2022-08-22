<?php

namespace App\Http\Controllers;

use App\Models\KategoriIuran;
use Illuminate\Http\Request;

class KategoriIuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriiuran = KategoriIuran::all();
        return view('kategoriiuran.index', compact(
            'kategoriiuran'
        ));
    }

    public function adminkategoriiuran()
    {
        $kategoriiuran = KategoriIuran::all();
        return view('kategoriiuran.adminindex', compact(
            'kategoriiuran'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $kategoriiuran = KategoriIuran::findorfail($id);
        return view('kategoriiuran.edit', compact(
            'kategoriiuran'
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
        $kategoriiuran = KategoriIuran::findorfail($id);
        $kategoriiuran->update($request->all());

        return redirect('adminkategoriiuran')->with('success', 'Akses Akun Berhasil Diupdate!');
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
