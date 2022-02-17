<?php

namespace Database\Seeders;

use App\Models\Prefecture;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::upsert([
            ['name' => 'Headquarters',                  'code' => "HQ",     'established_at' => '2018-01-01 00:00', 'zip' => '1620065',     'prefecture_id' => Prefecture::where('title', 'Tokyo')->first()->id,    'address' => "轟ビル, 新宿区, 住吉町7-12",     'phone' => '03-4530-9540',   'fax' => null],
            ['name' => '(Yes) Green Field',             'code' => "13",     'established_at' => '2019-08-01 09:00', 'zip' => '4700134',     'prefecture_id' => Prefecture::where('title', 'Aichi')->first(),        'address' => "日進市, 香久山２丁目３２０３",    'phone' => '052-804-0586',   'fax' => '052-804-0589'],
            ['name' => 'Directly managed by Yamaha',    'code' => "YMPC",   'established_at' => '2019-06-28 15:55', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Machikawa',                     'code' => "10",     'established_at' => '2019-06-28 15:54', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Koyo',                          'code' => "9",      'established_at' => '2019-06-28 15:53', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Ehime Yuki',                    'code' => "8",      'established_at' => '2019-06-28 15:52', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Green Support',                 'code' => "7",      'established_at' => '2019-06-28 15:52', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Turf Tech',                     'code' => "6",      'established_at' => '2019-06-28 15:51', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Water',                         'code' => "5",      'established_at' => '2019-06-28 15:51', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Sanji',                         'code' => "4",      'established_at' => '2019-06-28 15:50', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Mikuni',                        'code' => "3",      'established_at' => '2019-06-28 15:50', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Treasure Quotient',             'code' => "2",      'established_at' => '2019-06-28 15:48', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
            ['name' => 'Others',                        'code' => "999",    'established_at' => '2018-01-01 00:00', 'zip' => null,          'prefecture_id' => null,                                                'address' => null,                          'phone' => null,             'fax' => null],
        ], ['name'], []);
    }
}
