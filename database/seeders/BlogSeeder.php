<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => 'Promo Ahkir Tahun',
            'content' => 'Perusahaan Seger Waras, salah satu perusahaan makanan terbesar di Indonesia, mengumumkan penawaran promosi akhir tahun terbaru. Promo ini menawarkan diskon hingga 30% untuk produk-produk Seger Waras di wilayah tertentu. Penawaran ini berlaku mulai tanggal 1 Desember hingga 31 Desember. Promo ini berlaku untuk semua produk Seger Waras termasuk makanan kering, snack, dan minuman. Selain itu, para pelanggan juga akan mendapatkan hadiah gratis untuk setiap pembelian minimal Rp. 100.000. Promo ini diharapkan dapat membantu para pelanggan untuk menikmati produk Seger Waras dengan harga yang lebih terjangkau.',
            'cover' => 'jamu.jpg',
            'user_id' => 1
        ]);

        Blog::create([
            'title' => 'Haiping dalam bentuk Kapsul',
            'content' => '
            Wanita yang mencari cara untuk menjaga berat badan mereka sekarang bisa mencoba produk baru Seger Waras, Haiping. Haiping adalah suplemen diet yang berasal dari bahan-bahan alami yang dikemas dalam bentuk kapsul. Dengan meminum kapsul ini setiap hari, wanita dapat menurunkan berat badan tanpa harus menjalani diet ketat. Kapsul ini telah diformulasikan dengan komposisi herbal unik yang membantu wanita mendapatkan tubuh yang langsing dan sehat. Kini, wanita dapat memiliki tubuh yang ideal tanpa harus khawatir tentang efek samping. Jadi, jangan ragu untuk mencoba Haiping!'
            ,
            'cover' => 'products/haiping2.jpg',
            'user_id' => 1
        ]);

        Blog::create([
            'title' => 'Pembukaan Pabrik Baru',
            'content' => '
            Pt Seger Waras, pabrik pembuat obat, telah membuka pabrik baru di daerah Bekasi. Pabrik baru ini dibangun dengan teknologi canggih untuk memproduksi berbagai obat yang memenuhi standar internasional. Teknologi ini akan memudahkan perusahaan untuk memproduksi obat lebih efisien dan dengan biaya yang lebih rendah. Dengan pembukaan pabrik baru ini, PT Seger Waras diharapkan dapat memenuhi permintaan pasar yang semakin bertambah dan memberikan layanan yang lebih baik. Pabrik baru ini akan membuka peluang kerja baru bagi banyak orang, yang akan sangat menguntungkan untuk daerah Bekasi.'
            ,
            'cover' => 'pabrik.jpg',
            'user_id' => 1
        ]);

        Blog::create([
            'title' => 'Pembukaan Website Seger Waras',
            'content' => 'Hari ini, Seger Waras, sebuah perusahaan pembuat obat, resmi membuka website mereka. Untuk merayakan hal ini, Seger Waras mengadakan sebuah acara dengan berbagai promo produk dan iklan. Acara ini dihadiri oleh orang-orang dari berbagai latar belakang yang ingin bergabung dalam komunitas Seger Waras dan memanfaatkan kesempatan untuk mendapatkan produk mereka dengan harga yang lebih murah. Acara ini juga menampilkan kesempatan untuk berinteraksi langsung dengan para ahli Seger Waras dan mengajukan pertanyaan mengenai produk mereka. Dengan berbagai fasilitas yang tersedia di website Seger Waras, para pengunjung bisa mendapatkan informasi yang tepat mengenai produk-produk mereka dan juga bisa membeli produk-produk mereka dengan harga yang lebih murah. Seger Waras berharap bahwa website ini akan menjadi sumber informasi mengenai produk-produk mereka sehingga orang-orang dapat memilih produk yang paling cocok untuk mereka.'
            ,
            'cover' => 'sgrwrsCap.png',
            'user_id' => 1
        ]);
    }
}
