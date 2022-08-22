<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Iuran;
use App\Models\Pedagang;
use App\Models\Karyawan;
use App\Models\Pengumuman;
use App\Models\Keraton;
use App\Models\Alunalun;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countIuran = Iuran::count();
        $countPedagang = Pedagang::count();
        $countKaryawan = Karyawan::count();
        $countKaryawan = Karyawan::count();
        $countProfile = User::count();
        $countKeraton = Keraton::count();
        $countAlunalun = Alunalun::count();

        $sudahbayar = Iuran::onlyTrashed()->get();
        $pengumuman = Pengumuman::first();
        $dtProfile = User::all();
        $dtIuran = Iuran::all();
        return view('home', compact(
            'dtProfile', 'countProfile', 'countKaryawan', 'pengumuman', 'dtIuran', 'countIuran', 'countPedagang', 'countKeraton', 'countAlunalun', 'sudahbayar'
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
