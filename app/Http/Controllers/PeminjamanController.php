<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use Auth;

class PeminjamanController extends Controller
{
    public function index(){
    	$peminjaman=Peminjaman::all();
    	$data=['peminjaman'=>$peminjaman];
    	return $data;

    }

    public function create(Request $request){
    	$peminjaman=new Peminjaman();
    	$peminjaman->nama_peminjam=$request->nama_peminjam;
    	$peminjaman->jumlah_hari=$request->jumlah_hari;
    	$peminjaman->save();

    	return "Data Tersimpan";

    }
}
