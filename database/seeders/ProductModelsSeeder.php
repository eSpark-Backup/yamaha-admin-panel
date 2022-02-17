<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Seeder;

class ProductModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductModel::upsert([
            ['name' => 'G30A', 'status' => 1],
            ['name' => 'G30E', 'status' => 1],
            ['name' => 'G31AP', 'status' => 1],
            ['name' => 'G31EP', 'status' => 1],
            ['name' => 'YDRE', 'status' => 1],
            ['name' => 'YDRA', 'status' => 1],
            ['name' => 'DR2A', 'status' => 1],
            ['name' => 'DR2E', 'status' => 1],
            ['name' => 'Other', 'status' => 1],
        ], ['name'], ['status']);
    }
}
