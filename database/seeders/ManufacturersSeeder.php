<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::upsert([
            ['name' => 'Yamha', 'short_name' => 'Y'],
            ['name' => 'Hitachi', 'short_name' => 'H'],
            ['name' => 'Sanyo', 'short_name' => 'S'],
            ['name' => 'Green Boy', 'short_name' => 'GB'],
            ['name' => 'Club Car', 'short_name' => 'CC'],
            ['name' => 'EZ - GO', 'short_name' => 'EG'],
            ['name' => 'Others', 'short_name' => 'O'],
        ], ['name'], []);
    }
}
