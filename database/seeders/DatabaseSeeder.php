<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ihsan Fajar Ramadhan',
            'email' => 'ihsanfajarrpl@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
        ]);

        User::create([
            'name' => 'Bunga Kharisma',
            'email' => 'bungakharisma@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'anakpkl',
        ]);

        User::create([
            'name' => 'Muhammad Elang',
            'email' => 'muhammadelang@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'anakpkl',
        ]);

        User::create([
            'name' => 'Alfina damayanti',
            'email' => 'alfinadamayanti@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'anakpkl',
        ]);
    }
}
