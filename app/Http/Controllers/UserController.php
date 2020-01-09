<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

use PDF;

class UserController extends Controller{

    public function index(){
        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }

    public function tambah(){
    	return view('user_tambah');
    }

    public function store(Request $request){
    	$this->validate($request,[
			'username' => 'required',
			'password' => 'required',
			'email' => 'required',
    	]);

    	User::create([
    		'username' => $request->username,
			'password' => $request->password,
			'email' => $request->email,
    	]);
  
    	return redirect('/user');
    }

    public function edit($email){
            $user = DB::table('users')->where('email',$email)->get();
    		return view('user_edit', ['user' => $user]);
    }

	 public function update($email, Request $request){
		$this->validate($request,[
			'email' => 'required',
			'password' => 'required',
			'email' => 'required',
    	]);

    		$user = User::find($email);
			$user->username = $request->username;
			$user->password = $request->password;
			$user->email = $request->email;
    		$user->save();
    		return redirect('/user');
    }

    public function delete($email){
        $user = User::find($email);
        $user->delete();
        return redirect('/user');
	}
	
	public function cetak_pdf(){
        $user = DB::table('users')->get();
		$pdf = PDF::loadview('user_pdf',['user'=>$user]);
		return $pdf->download('laporan-user-pdf');
	}
}
