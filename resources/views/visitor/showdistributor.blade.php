@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="bg-neutral-50 pb-16">

    <h1 class="font-black text-3xl text-gray-800 text-center mx-auto mt-10 pt-20">{{ $distributor['name'] }}</h1>

    <div class="lg:w-3/5 h-fit mx-auto mt-12">
        <p class="mt-10">
        {{ $distributor['description'] }}
        </p>
    </div>

    <div class="inline-flex justify-center items-center w-full mx-auto mt-20">
        <hr class="my-8 w-[66rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-28">LOCATION</span>
    </div>

    <div class="w-3/4 mx-auto py-6 gap-8 grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-8 md:ml-8" >     
        
        <div class="inline-flex justify-center items-center w-full md:hidden">
            <hr class="my-8 w-[20rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 px-3 text-2xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 text-center">LOCATION</span>
        </div>

        @foreach ($distributor->details as $detail)
        <div class="flex flex-col md:mx-auto mx-8 items-center bg-white border rounded-lg shadow-md">
            <div class="p-5">
                <div class="flex">
                    <p class="ml-2 mt-1 text-gray-600">TIME: {{ $detail->timeOpen }} - {{ $detail->timeClosed }}</p>
                </div>
                <div>
                    <h5 class="mt-4 mb-12 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Location:<br>{{ $detail['location'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach

    </div>


</div>

@endsection