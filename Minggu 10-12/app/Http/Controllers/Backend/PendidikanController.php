<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    
public function index()
	{
		$pendidikan = pendidikan::get();
	 return view('backend.pendidikan.index',compact('pendidikan'));
	}

public function create()
	{
		$pendidikan = null;
		return view('backend.pendidikan.create',compact('pendidikan'));
	}



public function edit(Pendidikan $pendidikan)
	{
		return view ('backend.Pendidikan.create', compact('pendidikan'));
	}
	
public function update(request $request, Pendidikan $pendidikan)
	{
		$pendidikan->update($request->all());

		return redirect()->route('pendidikan.index')
						->with('success','Pendidikan berhasil diperbaharui.');
	}

public function destroy(Pendidikan $pendidikan)

{
	$pendidikan->delete();
	return redirect()->route('pendidikan.index')
					->with('success','Data Pendidikan berhasil dihapus');
}

public function store(Request $request)
	{
		Pendidikan::create($request->all());
		return redirect()->route('pendidikan.index')
						->with('success','Data Pendidikan baru telah berhasil disimpan.');
	}


}
