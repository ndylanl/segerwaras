@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50 pb-32">

    <h1 class="font-black text-3xl text-gray-800 text-center mx-auto mt-10 pt-20">{{ $berita['title'] }}</h1>

    <img src="/img/sgrwrsCap.png" alt="" class="lg:h-96 w-auto mx-auto mt-10">


<?php
    $text=
        "line1\r\n" .
        "line2\r\n" .
        "line3\r\n";


    
?>

    <div class="lg:w-3/4 h-fit mx-auto mt-8">
        <div class="flex">
            <img src="/img/calendarIcon.png" alt="">
            <p class="ml-2 mt-1 text-gray-600">{{ $berita['updated_at'] }}</p>
        </div>
        <p class="mt-10">
        {{ $berita['content'] }}
        </p>
    </div>


</div>


@endsection