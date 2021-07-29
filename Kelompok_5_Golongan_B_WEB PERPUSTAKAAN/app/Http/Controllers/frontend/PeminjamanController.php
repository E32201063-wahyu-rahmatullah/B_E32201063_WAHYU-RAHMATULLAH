<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\peminjaman;

class PeminjamanController extends Controller
{
	public function index()
	{
		$peminjaman = peminjaman::get();
		return view('peminjaman.index',compact('peminjaman'));

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

    public function edit(peminjaman $peminjaman)
    {
    	return view('peminjaman.create',compact('peminjaman'));
    }

    public function update(Request $request, peminjaman $peminjaman)
    {
    	$peminjaman->update($request->all());

    	return redirect()->route('peminjaman.index');
    					 with('success','Peminjaman berhasil diperbaharui.');
    }

    public function destroy(peminjaman $peminjaman)
    {
    	$peminjaman->delete();
    	return redirect()->route("peminjaman.index");
    					 with('success','Data Peminjaman berhasil dihapus');
    }

}
