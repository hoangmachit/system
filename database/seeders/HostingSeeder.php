<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hostings;
use Carbon\Carbon;

class HostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hostings = [
            [
                'name' => 'Package Hosting A',
                'gb' => 1 * 1024,
                'ram' => 1 * 1024,
                'ip' => '192.168.1.1',
                'note' => "Desc Hosting A",
                'price' => 1700000,
                'price_special' => 1500000,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Package Hosting B',
                'gb' => 2 * 1024,
                'ram' => 2 * 1024,
                'ip' => '192.168.1.3',
                'note' => "Desc Hosting B",
                'price' => 1329000,
                'price_special' => 1129000,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Package Hosting C',
                'gb' => 5 * 1024,
                'ram' => 5 * 1024,
                'ip' => '192.168.1.4',
                'note' => "Desc Hosting C",
                'price' => 9990000,
                'price_special' => 8880000,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Package Hosting D',
                'gb' => 3 * 1024,
                'ram' => 3 * 1024,
                'ip' => '192.168.1.56',
                'note' => "Desc Hosting D",
                'price' => 4500000,
                'price_special' => 64000000,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($hostings as $key => $item) {
            Hostings::create($item);
        }
    }
}
