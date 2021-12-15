<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {

        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }

    public function tambah()
    {
	    return view('keranjangbelanja.tambah');
    }

    public function store(Request $request)
    {
	    DB::table('keranjangbelanja')->insert([
		    'KodeBarang' => $request->KodeBarang,
		    'Jumlah' => $request->Jumlah,
		    'Harga' => $request->Harga
	    ]);

	    return redirect('/keranjangbelanja');
    }

    public function hapus($ID)
    {
	DB::table('keranjangbelanja')->where('ID',$ID)->delete();

	return redirect('/keranjangbelanja');
    }

    public function edit($ID)
     {
         $keranjangbelanja = DB::table('keranjangbelanja')->where('ID',$ID)->get();

         return view('keranjangbelanja.edit',['keranjangbelanja' => $keranjangbelanja]);

     }

     public function update(Request $request)
     {
         DB::table('keranjangbelanja')->where('ID',$request->ID)->update([
             'KodeBarang' => $request->KodeBarang,
             'Jumlah' => $request->Jumlah,
             'Harga' => $request->Harga,
         ]);

         return redirect('/keranjangbelanja');
     }
}
