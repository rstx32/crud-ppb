<?php

namespace App\Http\Controllers;

use App\Exports\PelangganExcelExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pelanggan;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class PelangganController extends Controller{

    public function index(){
        $pelanggan = DB::table('pelanggan')->get();
        return view('pelanggan', ['pelanggan' => $pelanggan]);
    }

    public function tambah(){
    	return view('pelanggan_tambah');
    }

    public function store(Request $request){
    	$this->validate($request,[
			'username' => 'required',
			'password' => 'required',
			'email' => 'required',
    	]);

    	Pelanggan::create([
    		'username' => $request->username,
			'password' => $request->password,
			'email' => $request->email,
    	]);
  
    	return redirect('/pelanggan');
    }

    public function edit($email){
            $pelanggan = DB::table('pelanggan')->where('email',$email)->get();
    		return view('pelanggan_edit', ['pelanggan' => $pelanggan]);
    }

	 public function update($email, Request $request){
		$this->validate($request,[
			'username' => 'required',
			'password' => 'required',
    	]);

		$pelanggan = Pelanggan::find($email);
		$pelanggan->username = $request->username;
		$pelanggan->password = $request->password;
		$pelanggan->save();
		return redirect('/pelanggan');
    }

    public function delete($email){
        $pelanggan = Pelanggan::find($email);
        $pelanggan->delete();
        return redirect('/pelanggan');
	}
	
	public function cetak_pdf(){
        $pelanggan = DB::table('pelanggan')->get();
		$pdf = PDF::loadview('pelanggan_pdf',['pelanggan'=>$pelanggan]);
		return $pdf->download('laporan-pelanggan-pdf');
    }
    
    public function export_excel(){
        return Excel::download(new PelangganExcelExport, 'daftar_pelanggan.xlsx');
    }
}
