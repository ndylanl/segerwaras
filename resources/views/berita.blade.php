@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
        <hr class="my-8 w-[15rem] md:w-[50rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 px-3 text-3xl md:text-5xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2">BERITA</span>
    </div>
</div>

<div class="bg-neutral-50 pt-10">
    
    <div class="flex flex-col md:mx-auto mx-8 items-center bg-white border rounded-lg shadow-md md:flex-row md:w-3/4">
        <img class="object-cover hidden md:block w-full rounded-t-lg m-4 h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/img/sgrwrsCap.png" alt="">
        <div class="p-5">
            <p>insert date here</p>
            <div>
                <h5 class="mt-4 mb-12 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Judul Cerita Terkini</h5>
            </div>
            <a href="/berita/id" class="px-3 py-2 my-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300">
                Selengkapnya
            </a>
        </div>
    </div>

    <div class="w-3/4 mx-auto py-20 gap-4 grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 md:ml-8" >     
        
        <div class="inline-flex justify-center items-center w-full md:hidden">
            <hr class="my-8 w-[20rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 px-3 text-2xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 text-center">BERITA LAINNYA</span>
        </div>

        <?php
            $berita = array(
                1,
                2,
                1,
                2,
                1,
                
            );
        ?>

        @foreach ($berita as $br)
        <x-beritacomp date="insert date here" :title="'test'" :link="'/berita/id'"/>
        @endforeach

    </div>

</div>


@endsection