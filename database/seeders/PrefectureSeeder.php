<?php

namespace Database\Seeders;

use App\Models\Prefecture;
use Illuminate\Database\Seeder;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prefecture::upsert([
            ['title' => 'Akita'],
            ['title' => 'Aomori'],
            ['title' => 'Chiba'],
            ['title' => 'Ehime'],
            ['title' => 'Fukui'],
            ['title' => 'Fukuoka'],
            ['title' => 'Fukushima'],
            ['title' => 'Gunma'],
            ['title' => 'Hokkaido'],
            ['title' => 'Ibaraki'],
            ['title' => 'Ishikawa'],
            ['title' => 'Iwate'],
            ['title' => 'Kagawa'],
            ['title' => 'Kagoshima'],
            ['title' => 'Kanagawa'],
            ['title' => 'Kochi'],
            ['title' => 'Kumamoto'],
            ['title' => 'Miyagi'],
            ['title' => 'Miyazaki'],
            ['title' => 'Nagasaki'],
            ['title' => 'Niigata'],
            ['title' => 'Oita'],
            ['title' => 'Okinawa'],
            ['title' => 'Saga'],
            ['title' => 'Saitama'],
            ['title' => 'Tochigi'],
            ['title' => 'Tokushima'],
            ['title' => 'Tokyo'],
            ['title' => 'Toyama'],
            ['title' => 'Yamagata'],
            ['title' => 'Yarnanashi'],
        ], ['title'], ['title']);
    }
}
