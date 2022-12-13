@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50 pb-10">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
        <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 px-3 text-5xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2">BERITA</span>
    </div>

    <h1 class="font-black text-3xl text-gray-800 text-center mx-auto mt-20">{{ $berita['title'] }}</h1>

    <img src="/img/sgrwrsCap.png" alt="" class="lg:h-96 w-auto mx-auto mt-10">


<?php
    $text=
        "line1\r\n" .
        "line2\r\n" .
        "line3\r\n";


    
?>

    <div class="lg:w-3/4 h-96 bg-red-200 mx-auto mt-8">
        <div class="flex">
            <img src="/img/calendarIcon.png" alt="">
            <p class="ml-2 mt-1 text-gray-600">Insert Date Here</p>
        </div>
        <p class="mt-10">
        <?php
echo $text;


        ?>
        </p>
    </div>


</div>


@endsection