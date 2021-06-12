<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\TableExport;
use Maatwebsite\Excel\Facades\Excel;

class BukuController
{
    public function index()
    {
        $semua = DB::table('rak_buku')
        ->Join('buku', 'rak_buku.id_buku', '=', 'buku.id')
        ->Join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
        ->select('rak_buku.id','buku.judul AS judul_buku','buku.tahun_terbit AS tahun_buku','jenis_buku.jenis AS jenis_b',)
        ->orderBy('rak_buku.id', 'asc')
        ->get();

    	return view('tampilan0269',['rak_buku' => $semua]);
    }

    public function export() 
    {
        return Excel::download(new TableExport, 'Data_1461900269.xlsx');
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
