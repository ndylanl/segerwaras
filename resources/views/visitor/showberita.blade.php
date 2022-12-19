@extends('layouts.template')

@section('title', $title)

@section('content')

<main id="swup" class="transition-fade w-5/6 mt-24 px-4 h-full mx-auto mb-8">
<div class="pb-16 border border-gray-300 w-full h-fit rounded-lg shadow-2xl bg-white">
    <div class="bg-green-600 text-white border-b-2 rounded-t-md border-gray-300">
        <div class="font-black text-3xl text-center mx-auto">
            <div class="inline-flex justify-center items-center bg-green-600 w-fit px-16 py-2">
                <hr class="my-8 w-[32rem] md:w-[32rem] h-px bg-white border-0">
                <span class="absolute left-1/2 text-3xl font-black -translate-x-1/2 bg-green-600 w-fit mx-auto px-20">{{ $berita['title'] }}</span>
            </div>
        </div>
    </div>

    <img src="/storage/{{ $berita['cover'] }}" alt="" class="mx-auto mt-6 max-h-96 min-h-[20rem]">

    <div class="lg:w-11/12 h-fit mt-12 mx-8 md:mx-auto">
        <div class="flex">
            <img src="/img/calendarIcon.png" alt="">
            <p class="ml-2 mt-1 text-gray-600">{{ $berita['updated_at']->format('m/d/Y') }}</p>
        </div>
        <p class="mt-10">
        {{ $berita['content'] }}
        </p>
    </div>

    <div class="justify-center items-center w-full mx-auto mt-20 hidden md:inline-flex">
        <hr class="my-8 w-[48rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 text-3xl font-black bg-white text-gray-900 -translate-x-1/2 px-28">BERITA TERKINI</span>
    </div>

    <div class="w-4/5 mx-auto py-6 gap-8 grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-8 md:ml-8" >     
        
        <div class="inline-flex justify-center items-center w-full md:hidden">
            <hr class="my-8 w-[20rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 px-3 text-2xl font-black bg-white text-gray-900 -translate-x-1/2 text-center">BERITA TERKINI</span>
        </div>

        @foreach ($beritas as $br)
            @if ($loop->iteration < 7)
            @if($berita['id'] != $br['id'])
            <x-beritacomp :date="$br['updated_at']->format('m/d/Y')" :title="$br['title']" link="/berita/{{ $br->id }}"/>

            @endif
            @endif
        @endforeach

    </div>


</div>
</main>




@endsection