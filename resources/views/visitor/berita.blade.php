@extends('layouts.template')

@section('title', $title)

@section('content')

<main id="swup" class="transition-fade w-5/6 mt-24 px-4 h-full mx-auto mb-8">
    <div class="pb-16 border border-gray-300 w-full h-fit rounded-lg shadow-2xl bg-white">
        <div class="bg-green-600 text-white border-b-2 rounded-t-md border-gray-300">
            <div class="font-black text-3xl text-center mx-auto">
                <div class="inline-flex justify-center items-center bg-green-600 w-fit px-16 py-2">
                    <hr class="my-8 w-[32rem] md:w-[32rem] h-px bg-white border-0">
                    <span class="absolute left-1/2 text-3xl font-black -translate-x-1/2 bg-green-600 w-fit mx-auto px-20">BERITA</span>
                </div>
            </div>
        </div>

    <div class="pt-10">

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
</div>


</main>




@endsection