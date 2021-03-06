<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         User::create([
            'name' => 'Hakim Asrori',
            'email' => 'saneglos005@gmail.com',
            'password' => Hash::make('saneglos005@gmail.com'),
            'id_role' => 2
        ]);
    }
}
