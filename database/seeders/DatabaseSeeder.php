<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DomainInitSeeder::class,
            CancelsSeeder::class,
            DesignSeeder::class,
            DomainSeeder::class,
            HostingSeeder::class,
            CustomerSeeder::class,
            ContractSeeder::class
        ]);
    }
}
