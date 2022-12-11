@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50 pb-10">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
        <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 px-3 text-5xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2">BERITA</span>
    </div>

    <h1 class="font-black text-3xl text-gray-800 text-center mx-auto mt-20">JUDUL PRODUK</h1>



    <div class="md:grid md:grid-cols-2 lg:px-40 lg:py-10 bg-neutral-50">
        <img src="/img/sgrwrsCap.png" alt="" class="lg:h-96 w-auto mx-auto mt-10">
        <div class="mt-16">
            <h1 class="text-2xl">Rp. Insert Number Here</h1>
            <p class="mt-16">Insert Number Here Jumlah Tersedia</p>
            <?php
                $attnum = 1;
            ?>
            <div class="grid grid-cols-3 w-fit absolute bottom-24">

                <button class="border-gray-500 border hover:ring-1 hover:ring-green-500 text-3xl" id="substract">
                    -
                </button>
                <input class="text-center" type="number" min="1" max="10" id="number" value={{ $attnum }} disabled>
                <button class="border-gray-500 border hover:ring-1 hover:ring-green-500 text-3xl" id="add">
                     +
                </button>

            </div>
            <button class="text-white absolute bottom-2 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Add to Cart
            </button>

        </div>
    </div>

    <div class="bg-neutral-50 p-20">
        <div class="border border-gray-600 h-96 mx-auto bg-white rounded-lg shadow-md md:w-3/4">

        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('add').addEventListener('click', function() {
                document.getElementById('number').value++;
            });
            document.getElementById('substract').addEventListener('click', function() {
                document.getElementById('number').value--;
            });
        });
    </script>


@endsection