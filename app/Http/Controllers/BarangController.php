<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;

use PDF;

class BarangController extends Controller
{

    public function index()
    {
    	$barang = Barang::all();
    	return view('barang', ['barang' => $barang]);
    }

    public function tambah()
    {
    	return view('barang_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
			'nm_brg' => 'required',
			'harga' => 'required',
			'image' => 'required',
			'deskripsi' => 'required',
    	]);

    	Barang::create([
    		'kd_brg' => $request->kd_brg,
			'nm_brg' => $request->nm_brg,
			'harga' => $request->harga,
			'image' => $request->image,
			'deskripsi' => $request->deskripsi,
    	]);
  
    	return redirect('/barang');
    }

    public function edit($kd_brg){
    		$barang = Barang::find($kd_brg);
    		return view('barang_edit', ['barang' => $barang]);
    }

	 public function update($kd_brg, Request $request)
	 {
		$this->validate($request,[
			'nm_brg' => 'required',
			'harga' => 'required',
			'image' => 'required',
			'deskripsi' => 'required',
    	]);

    		$barang = Barang::find($kd_brg);
			$barang->nm_brg = $request->nm_brg;
			$barang->harga = $request->harga;
			$barang->image = $request->image;
			$barang->deskripsi = $request->deskripsi;
    		$barang->save();
    		return redirect('/barang');
    }

     public function delete($kd_brg)
    {
    		$barang = Barang::find($kd_brg);
    		$barang->delete();
    		return redirect('/barang');
	}
	
	public function cetak_pdf()
	{
		$barang = Barang::all();
	
		$pdf = PDF::loadview('barang_pdf',['barang'=>$barang]);
		return $pdf->download('laporan-barang-pdf');
	}

}
