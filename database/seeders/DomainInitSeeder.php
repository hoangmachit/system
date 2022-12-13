<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\DomainInits;

class DomainInitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domain_inits = [
            [
                'name' => 'PA Việt Nam',
                'origin' => 'www.pavietnam.vn',
                'url' => 'https://www.pavietnam.vn/',
                'note' => 'PAVIETNAM.VN được nhiều khách hàng tin tưởng lựa chọn',
            ],
            [
                'name' => 'Mắt Bão',
                'origin' => 'www.matbao.net',
                'url' => 'https://www.matbao.net/',
                'note' => 'MATBAO.NET được nhiều khách hàng tin tưởng lựa chọn',
            ],
            [
                'name' => 'INET',
                'origin' => 'inet.vn',
                'url' => 'https://inet.vn/',
                'note' => 'INET.VN được nhiều khách hàng tin tưởng lựa chọn',
            ]
        ];
        foreach ($domain_inits as $key => $item) {
            DomainInits::create($item);
        }
    }
}
