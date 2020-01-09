<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller{

    public function index()
    {
    	$user = User::all();
    	return view('user', ['user' => $user]);
    }

    public function tambah()
    {
    	return view('user_tambah');
    }

    public function store(Request $request)
    {
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

    public function edit($username){
    		$user = User::find($username);
    		return view('user_edit', ['user' => $user]);
    }

	 public function update($username, Request $request)
	 {
		$this->validate($request,[
			'username' => 'required',
			'password' => 'required',
			'email' => 'required',
    	]);

    		$user = User::find($username);
			$user->username = $request->username;
			$user->password = $request->password;
			$user->email = $request->email;
    		$user->save();
    		return redirect('/user');
    }

     public function delete($username)
    {
    		$user = User::find($username);
    		$user->delete();
    		return redirect('/user');
	}
	
	public function cetak_pdf()
	{
		$user = User::all();
	
		$pdf = PDF::loadview('user_pdf',['user'=>$user]);
		return $pdf->download('laporan-user-pdf');
	}
}
