<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::upsert([
            ['name' => 'E/G', 'code' => 'CART001', 'order' => 1],
            ['name' => 'Lead Battery', 'code' => 'CART002', 'order' => 2],
            ['name' => 'Lithium', 'code' => 'CART003', 'order' => 3],
            ['name' => 'Capacity 4-5 People', 'code' => 'CART004', 'order' => 4],
            ['name' => 'Capacity 2 People', 'code' => 'CART005', 'order' => 5],
            ['name' => 'Capacity 1 Person', 'code' => 'CART006', 'order' => 6],
            ['name' => 'Popularity', 'code' => 'CART007', 'order' => 7],
            ['name' => '100,000 Yen OR Less', 'code' => 'CART008', 'order' => 8],
            ['name' => '300,000 Yen OR Less', 'code' => 'CART009', 'order' => 9],
            ['name' => '500,000 Yen OR Less', 'code' => 'CART010', 'order' => 10],
            ['name' => '700,000 Yen OR Less', 'code' => 'CART011', 'order' => 11],
        ], ['name'], ['status']);
    }
}
