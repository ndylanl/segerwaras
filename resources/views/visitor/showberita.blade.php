@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50 pb-16">

    <h1 class="font-black text-3xl text-gray-800 text-center mx-auto mt-10 pt-20">{{ $berita['title'] }}</h1>

    <img src="/img/{{ $berita['cover'] }}" alt="" class="mx-auto mt-6 max-h-96 min-h-[20rem]">

    <div class="lg:w-3/5 h-fit mt-12 mx-8 md:mx-auto">
        <div class="flex">
            <img src="/img/calendarIcon.png" alt="">
            <p class="ml-2 mt-1 text-gray-600">{{ $berita['updated_at']->format('m/d/Y') }}</p>
        </div>
        <p class="mt-10">
        {{ $berita['content'] }}
        </p>
    </div>

    <div class="justify-center items-center w-full mx-auto mt-20 hidden md:inline-flex">
        <hr class="my-8 w-[66rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-28">BERITA TERKINI</span>
    </div>

    <div class="w-3/4 mx-auto py-6 gap-8 grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-8 md:ml-8" >     
        
        <div class="inline-flex justify-center items-center w-full md:hidden">
            <hr class="my-8 w-[20rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 px-3 text-2xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 text-center">BERITA TERKINI</span>
        </div>

        @foreach ($beritas as $br)
            @if ($loop->iteration < 7)

                <x-beritacomp :date="$br['updated_at']->format('m/d/Y')" :title="$br['title']" link="/berita/{{ $br->id }}"/>

            @endif
        @endforeach

    </div>


</div>


@endsection