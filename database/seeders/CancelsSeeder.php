<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cancels;

class CancelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancels = [
            [
                'name' => 'Reason 1'
            ],
            [
                'name' => 'Reason 2'
            ],
            [
                'name' => 'Reason 3'
            ],
            [
                'name' => 'Other'
            ]
        ];
        foreach ($cancels as $key => $item) {
            Cancels::create($item);
        }
    }
}
