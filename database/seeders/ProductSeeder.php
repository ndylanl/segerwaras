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
            'description' => 'Obat yang dirancang untuk mengurangi lemak tubuh perempuan adalah obat penurun berat badan. 
                                Ini mengandung bahan aktif yang akan meningkatkan metabolisme tubuh dan membantu perempuan 
                                untuk menurunkan berat badan secara lebih efektif.',
            'price' => 100000,
            'unitStock' => 15,
            'cover' => "haiping1.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Darial',
            'description' => 'Obat ini berisi bahan-bahan seperti ibuprofen dan aspirin yang dapat membantu mengurangi nyeri, 
                                meredakan sakit, mengurangi peradangan, dan meringankan gejala encok. Obat ini juga dapat 
                                mengandung glukosamina dan asam chondroitin yang berfungsi untuk melindungi tulang rawan 
                                dan mengurangi gejala pegel linu.',
            'price' => 150000,
            'unitStock' => 18,
            'cover' => "darial.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Haiping Kapsul',
            'description' => 'Obat yang dirancang untuk mengurangi lemak tubuh perempuan adalah obat penurun berat badan. 
                                Ini mengandung bahan aktif yang akan meningkatkan metabolisme tubuh dan membantu perempuan 
                                untuk menurunkan berat badan secara lebih efektif.',
            'price' => 80000,
            'unitStock' => 10,
            'cover' => "haiping2.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Kumisol',
            'description' => 'Obat ini terdiri dari kombinasi herbal yang kaya akan antioksidan dan nutrisi yang dapat 
                                membantu meningkatkan kesehatan dan pertumbuhan rambut pada area kumis dan janggut. Kombinasi 
                                herbal tersebut meliputi minyak zaitun, minyak kelapa, minyak biji lada hitam, minyak jarak, 
                                dan beberapa herbal lainnya.',
            'price' => 90000,
            'unitStock' => 20,
            'cover' => "kumisol.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Minyak Gosok 100ml',
            'description' => 'Obat Cap Tunggal Minyak Gosok mengandung minyak Pinus, Camphor, Peppermint Oil, dan minyak jelyar. 
                                Minyak ini berfungsi untuk membantu mengurangi rasa sakit, meredakan pegal-pegal, kram otot 
                                dan nyeri sendi. Minyak ini dapat digunakan untuk mengurangi peradangan dan pembengkakan, 
                                serta membantu membersihkan kulit dan mencegah infeksi.',
            'price' => 120000,
            'unitStock' => 15,
            'cover' => "minyakbesar.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Minyak Gosok 30ml',
            'description' => 'Obat Cap Tunggal Minyak Gosok mengandung minyak Pinus, Camphor, Peppermint Oil, dan minyak jelyar. 
                                Minyak ini berfungsi untuk membantu mengurangi rasa sakit, meredakan pegal-pegal, kram otot 
                                dan nyeri sendi. Minyak ini dapat digunakan untuk mengurangi peradangan dan pembengkakan, 
                                serta membantu membersihkan kulit dan mencegah infeksi.',
            'price' => 50000,
            'unitStock' => 8,
            'cover' => "minyakkecil.jpg",
            'isVisible' => true, 
        ]);
        Product::create([
            'name' => 'Topicin',
            'description' => 'Topicin adalah obat resep yang diindikasikan untuk mengobati haid tidak teratur, misalnya haid 
                                yang kurang dari 21 hari atau lebih dari 35 hari. Obat ini mengandung progesteron, yaitu hormon 
                                yang membantu mengatur siklus menstruasi.',
            'price' => 130000,
            'unitStock' => 6,
            'cover' => "topicin.jpg",
            'isVisible' => true, 
        ]);
    }
}
