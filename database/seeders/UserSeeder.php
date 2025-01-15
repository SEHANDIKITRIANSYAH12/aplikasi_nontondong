<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'sehan123',
            'name' => 'Sehan Diki Triansyah1',
            'password' => bcrypt('valen123'),
            'birthdate' => '2004-12-22', // Tanggal diperbaiki menjadi format valid
            'balance' => 700000,
        ]);

        User::create([
            'username' => 'valen123',
            'name' => 'Valen Fadillah',
            'password' => bcrypt('valen123'),
            'birthdate' => '2002-02-14', // Tanggal ini sudah valid
            'balance' => 450000,
        ]);
    }
}
