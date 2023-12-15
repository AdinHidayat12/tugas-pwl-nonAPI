<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan contoh pengguna
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pustakawan',
            'email' => 'pustakawan@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Anggota',
            'email' => 'anggota@example.com',
            'password' => Hash::make('password'),
        ]);

        // Tambahkan lebih banyak pengguna sesuai kebutuhan

        $this->command->info('UserSeeder berhasil dijalankan!');
    }
}
