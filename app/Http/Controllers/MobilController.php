<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use Auth;

class MobilController extends Controller
{
	public function index(){
		$mobil=Mobil::all();
		$data=['mobil'=>$mobil];
		return $data;
	}

	public function create(Request $request){
		$mobil=new Mobil();
		$mobil->nama_mobil=$request->nama_mobil;
		$mobil->merk=$request->merk;
		$mobil->bahan_bakar=$request->bahan_bakar;
		$mobil->plat_nomor=$request->plat_nomor;
		$mobil->warna=$request->warna;
		$mobil->jumlah=$request->jumlah;
		$mobil->save();

		return "Tambah data mobil berhasil!";
	}

	public function update(Request $request, $id){
		$mobil=Mobil::find($id);
		$mobil->nama_mobil=$request->nama_mobil;
		$mobil->merk=$request->merk;
		$mobil->bahan_bakar=$request->bahan_bakar;
		$mobil->plat_nomor=$request->plat_nomor;
		$mobil->warna=$request->warna;
		$mobil->jumlah=$request->jumlah;
		$mobil->save();

		return "Ubah data mobil berhasil!";
	}

	public function delete($id){
		$mobil=Mobil::find($id);
		$mobil->delete();

		return "Hapus data mobil berhasil!";
	}

	public function detail($id){
		$mobil=Mobil::find($id);

		return $mobil;
	}


}
