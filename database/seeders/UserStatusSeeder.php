<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_statuses')->insert([
            'id' => 0,
            'name' => 'Menunggu Verifikasi',
        ]);

        DB::table('user_statuses')->insert([
            'id' => 1,
            'name' => 'Pengguna Terverifikasi',
        ]);

        DB::table('user_statuses')->insert([
            'id' => 2,
            'name' => 'Pengguna Dibekukan',
        ]);
    }
}
