<?php
namespace App\Exports;
use App\Buku;

use Illuminate\support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TableExport implements FromView
{
    public function view() : view
    {
        $semua = DB::table('rak_buku')
        ->Join('buku', 'rak_buku.id_buku', '=', 'buku.id')
        ->Join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
        ->select('rak_buku.id','buku.judul AS judul_buku','buku.tahun_terbit AS tahun_buku','jenis_buku.jenis AS jenis_b',)
        ->orderBy('rak_buku.id', 'asc')
        ->get();

    	return view('Export0269',['rak_buku' => $semua]);
    }
}
