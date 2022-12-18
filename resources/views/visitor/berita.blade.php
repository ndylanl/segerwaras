@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
        <hr class="my-8 w-[15rem] md:w-[68rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-28">BERITA</span>
    </div>
</div>

<div class="bg-neutral-50 pt-10">

    @foreach ($berita as $br)
        @if ($loop->first)

        <div class="flex flex-col md:mx-auto mx-8 items-center bg-white border rounded-lg shadow-md md:flex-row md:w-3/4">
            <img class="object-cover hidden md:block w-1/2 m-2 md:rounded-none" src="/img/{{ $br['cover'] }}" alt="">
            <div class="p-5">
                <div class="flex">
                    <img src="/img/calendarIcon.png" alt="">
                    <p class="ml-2 mt-1 text-gray-600">{{ $br['updated_at']->format('m/d/Y') }}</p>
                </div>
                <div>
                    <h5 class="mt-4 mb-12 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $br['title'] }}</h5>
                </div>
                <a href="/berita/{{ $br->id }}" class="px-3 py-2 my-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300">
                    Selengkapnya
                </a>
            </div>
        </div>

        @endif
    @endforeach

    <div class="w-3/4 mx-auto py-20 gap-4 grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 md:ml-8" >     
        
        <div class="inline-flex justify-center items-center w-full md:hidden">
            <hr class="my-8 w-[20rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 px-3 text-2xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 text-center">BERITA LAINNYA</span>
        </div>

        @foreach ($berita as $br)
            @if ($loop->first)

                @else
                <x-beritacomp :date="$br['updated_at']->format('m/d/Y')" :title="$br['title']" link="berita/{{ $br->id }}"/>

            @endif
        @endforeach

    </div>

</div>


@endsection