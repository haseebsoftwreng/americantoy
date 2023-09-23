<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => '1234',
        ]);        
        User::create([
            'name' => 'User1',
            'email' => 'user1@mail.com',
            'password' => '1234',
        ]);
    }
}
