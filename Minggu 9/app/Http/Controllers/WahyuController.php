<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WahyuController extends Controller
{
   public function  index()
   {
	 	// return "Hello ini adalah method index, dalam controller Management.";

   			$nama = "Wahyu Rahmatullah";

   			$pelajaran = ["Algoritma & pemrograman", "kalkulus", "Pemrograman Web"];

   			return view('home' , compact('nama','pelajaran'));
   }

   public function  create()
   {
   		return "Method ini nantinya akan digunakan untuk menampilkan from untuk menambah data user";
   }
   
   public function  store(Request $request)
   {
   		return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
   }
   
   public function show($id)
   {
   	 	return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
   }
   
   public function edit($id)
   {
   		return "Method ini nantinya digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
   }

   public function update(request $request, $id)
   {
   	 	return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
   }

   public function destroy($id)
   {
   	return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
   }
}
