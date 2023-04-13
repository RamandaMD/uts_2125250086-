<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PesertasSeeder extends Seeder
{
      public function run(): void
    {
        //
        DB::table('pesertas') -> insert([
            [
                'nama'=> 'Rizky Ridho Ramadhan',
                'email'=> 'rizkyridhoramadhan@mhs.mdp.ac.id',
                'asal_pt'=> 'Universitas Multi Data Palembang',
                'url_foto'=> 'https://simponi2.mdp.ac.id/foto/2125/2125250079.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),    
                'updated_at' => Carbon::now()->format('Y-m-d ') 
            ]
        ]);
    }
}
