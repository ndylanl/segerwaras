<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Haiping',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 100000,
            'unitStock' => 15,
            'cover' => "haiping1.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Darial',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 150000,
            'unitStock' => 18,
            'cover' => "darial.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Haiping Kapsul',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 80000,
            'unitStock' => 10,
            'cover' => "haiping2.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Kumisol',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 90000,
            'unitStock' => 20,
            'cover' => "kumisol.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Minyak Gosok 100ml',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 120000,
            'unitStock' => 15,
            'cover' => "minyakbesar.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Minyak Gosok 30ml',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 50000,
            'unitStock' => 8,
            'cover' => "minyakkecil.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Topicin',
            'description' => 'Lorem ipsum dolor sit amet, consect',
            'price' => 130000,
            'unitStock' => 6,
            'cover' => "topicin.jpg",
            'isVisible' => true, 
        ]);
    }
}
