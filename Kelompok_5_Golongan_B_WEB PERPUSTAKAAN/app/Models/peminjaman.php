<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
	protected $table = 'peminjaman';
	protected $primaryKey = 'id';
	protected $fillable = [
		 'Nama', 'Judul_Buku', 'Prodi', 'Golongan', 'Tanggal_Peminjaman', 'Tanggal_Pengembalian', 'Denda',
	];
}
