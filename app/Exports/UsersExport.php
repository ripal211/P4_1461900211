<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\support\Facades\DB;
use Illuminate\Contracts\View\View;
class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $home = DB::table('rak_buku')
                
                ->select(DB::raw('jenis_buku.id as id_jenis,jenis_buku.jenis,buku.id as id_buku,buku.judul,buku.tahun_terbit,rak_buku.id_buku,rak_buku.id,rak_buku.id_jenis_buku'))
                ->join('buku','rak_buku.id','=','buku.id')  
                ->join('jenis_buku','rak_buku.id','=','jenis_buku.id')  
                      
                // ->where('buku_judul','LIKE',"%Slider%")
                ->get();
    
                return view('data0211',['home' => $home]);
      
    }
}
