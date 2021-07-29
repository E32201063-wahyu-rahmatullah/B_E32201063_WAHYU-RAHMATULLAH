<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
class PeminjamanController extends Controller
{
	public function index()
	{
		return view('peminjaman.index');

	}
	
	public function create()
	{	
	$peminjaman = null;
	return view('peminjaman.create',compact('peminjaman'));
	}
  
    public function store(Request $request)
    {
    	peminjaman::create($request->all());
    	return redirect()->route('peminjaman.index')
    					 ->with('success','Data Peminjaman baru telah berhasil disimpan.');
    }
    
}
