<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create();
        // User::create([
        //     'name' => 'Hamza B. Firwana',
        //     'email' => 'ferwanahamza@gmail.com',
        //     'password' => '123456789',
        // ]);
    }
}
