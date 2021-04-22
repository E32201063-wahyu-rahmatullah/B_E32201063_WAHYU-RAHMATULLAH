<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
    	DB::table('detail_profile')->insert([
            'name' => 'wahyu rahmatullah',
    		'address' => 'Lumajang',
    		'nomor_tlp' => '08xxxxxxx',
    		'ttl' => '2001-3-6',
    		'foto' => 'picture.png'



    	]);

    }
}
