<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalBrg = DB::table('barang')->count();
        $totalPlgn = DB::table('pelanggan')->count();
        return view('admin', ['total_barang' => $totalBrg, 'total_pelanggan'=> $totalPlgn]);
    }
}
