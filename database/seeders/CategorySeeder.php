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
            'slug' => 'majalah-lawas',
            'icon' => 'majalah.svg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Naskah & Dokumen Kuno',
            'slug' => 'naskah-dokumen-kuno',
            'icon' => 'naskah.svg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Buku Kuno',
            'slug' => 'buku-kuno',
            'icon' => 'buku.svg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Foto Lawas',
            'slug' => 'foto-lawas',
            'icon' => 'foto.svg',
        ]);
    }
}
