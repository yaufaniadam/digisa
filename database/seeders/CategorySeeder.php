<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Majalah Lawas',
        ]);

        DB::table('categories')->insert([
            'name' => 'Naskah & Dokumen Kuno',
        ]);

        DB::table('categories')->insert([
            'name' => 'Buku Kuno',
        ]);

        DB::table('categories')->insert([
            'name' => 'Foto Lawas',
        ]);
    }
}
