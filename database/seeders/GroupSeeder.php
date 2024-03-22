<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
 
        for($i = 1; $i <= 5; $i++){
 
           // insert data ke table pegawai menggunakan Faker
        DB::table('groups')->insert([
        'name' => $faker->realText($maxNbChars = 40, $indexSize = 2),      
        'thumbnail' => 'groups/1/thumbnail/logo-syaamil-quran-2020.png',
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        ]);
    
        }    
    }
}
