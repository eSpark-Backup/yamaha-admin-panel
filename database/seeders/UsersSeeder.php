<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert([
            ['name' => 'Developer Admin', 'email' => 'admin@example.com', 'password' => \bcrypt('Welcome@123!'), 'email_verified_at' => \now(), 'role_id' => 1],
            ['name' => 'Developer Agent', 'email' => 'agent@example.com', 'password' => \bcrypt('Welcome@123!'), 'email_verified_at' => \now(), 'role_id' => 2],
        ], ['name', 'email'], ['name', 'email', 'password', 'role_id']);
    }
}
