<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Detail::Factory()->count(15)->create();
        DB::table('details')->insert([
            'location'=>"Ruko Permata Bintaro Kav. 25-26, JL. Kencana Sari Barat I, No. A-4, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224",
            'timeOpen'=>'07:30',
            'timeClosed'=>'20:00',
            'distributor_id'=>1
        ]);
        DB::table('details')->insert([
            'location'=>"Ruko Permata Bintaro, Jl. Bintoro No.Kav 25-26, DR. Soetomo, Kec. Tegalsari, Kota SBY, Jawa Timur 60264",
            'timeOpen'=>'07:30',
            'timeClosed'=>'20:00',
            'distributor_id'=>1
        ]);
        DB::table('details')->insert([
            'location'=>"Jl. Babadan No.49b, Gundih, Kec. Bubutan, Kota SBY, Jawa Timur 60172",
            'timeOpen'=>'07:30',
            'timeClosed'=>'20:00',
            'distributor_id'=>2
        ]);
    }
}
