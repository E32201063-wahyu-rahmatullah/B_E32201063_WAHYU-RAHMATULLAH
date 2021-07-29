<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama', 100);
            $table->string('Judul_Buku', 100);
            $table->tinyInteger('Prodi');
            $table->tinyInteger('Golongan');
            $table->string('Tanggal_Peminjaman', 100);
            $table->string('Tanggal_Pengembalian', 100);
            $table->string('Denda', 100)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
