<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Plant::Factory()->count(5)->create();
        DB::table('plants')->insert([
            'name' => "House of Sampoerna",
            'description'=> "Taman Sampoerna No.6, Krembangan Utara, Kec. Pabean Cantikan, Kota SBY, Jawa Timur 60163",
            'user_id'=> 1
        ]);
        DB::table('plants')->insert([
            'name' => "East Java Match Factory Ltd PT",
            'description'=> "JL. Simomulyo 115 - 117, Simomulyo, Sukomanunggal, Surabaya, 60181, Simomulyo, Sukomanunggal, Surabaya City, East Java 60281",
            'user_id'=> 1
        ]);
    }
}
