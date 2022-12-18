<?php

namespace Database\Seeders;

use App\Models\Distributor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Distributor::Factory()->count(10)->create();
        DB::table('distributors')->insert([
            'name' => "Surya Medical",
            'description'=> "Melayani pengobatan secara general serta beauty products",
            'user_id'=> 1
        ]);
        DB::table('distributors')->insert([
            'name' => "Lunar Medical",
            'description'=> "Tersedia produk medis herbal dari tradisional hingga modern",
            'user_id'=> 1
        ]);
    }
}
