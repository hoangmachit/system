<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Designs;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designs = [
            [
                'first_name' => 'Nguyễn Văn',
                'last_name' => ' Design 01',
                'url' => 'https://design.com/detail/01',
                'note' => 'My note design 01',
                'date_start' => Carbon::now(),
                'date_finish' => Carbon::now(),
                'font_family' => 'Arial',
                'status' => 1,
                'photo' => 'design_01.jpg',
                'code' => 'DESIGN001',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Nguyễn Văn',
                'last_name' => ' Design 02',
                'url' => 'https://design.com/detail/02',
                'note' => 'My note design 02',
                'date_start' => Carbon::now(),
                'date_finish' => Carbon::now(),
                'font_family' => 'Arial, Time',
                'status' => 1,
                'photo' => 'design_02.jpg',
                'code' => 'DESIGN002',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Nguyễn Văn',
                'last_name' => ' Design 03',
                'url' => 'https://design.com/detail/03',
                'note' => 'My note design 03',
                'date_start' => Carbon::now(),
                'date_finish' => Carbon::now(),
                'font_family' => 'Arial, Time',
                'status' => 1,
                'photo' => 'design_03.jpg',
                'code' => 'DESIGN003',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Nguyễn Văn',
                'last_name' => ' Design 04',
                'url' => 'https://design.com/detail/04',
                'note' => 'My note design 04',
                'date_start' => Carbon::now(),
                'date_finish' => Carbon::now(),
                'font_family' => 'Arial, Time',
                'status' => 1,
                'photo' => 'design_04.jpg',
                'code' => 'DESIGN004',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($designs as $key => $item) {
            Designs::create($item);
        }
    }
}
