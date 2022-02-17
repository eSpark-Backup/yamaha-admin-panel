<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::upsert([
            ['title' => 'Administrator', 'slug' => Role::ADMIN, 'status' => 1],
            ['title' => 'Agent', 'slug' => Role::AGENT, 'status' => 1],
            ['title' => 'Batch Processing Role', 'slug' => Role::BATCH_USER, 'status' => 1],
            ['title' => 'Yamha Sales', 'slug' => Role::SALES, 'status' => 1],
            ['title' => 'Used Car Representative', 'slug' => Role::STAFF, 'status' => 1],
            ['title' => 'Maintenance Personnel', 'slug' => Role::MAINTAINER, 'status' => 1],
        ], ['title', 'slug'], ['title', 'slug', 'status']);
    }
}
