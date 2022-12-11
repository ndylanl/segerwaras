<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            UserSeeder::class,
            PlantSeeder::class,
            DistributorSeeder::class,
            DetailSeeder::class,
            BlogSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            CartItemSeeder::class,
            TransactionSeeder::class,
            ReviewSeeder::class,
            TagSeeder::class
        ]);
    }
}
