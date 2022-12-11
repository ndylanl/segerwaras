@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50 pb-12">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-20">
        <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 px-3 text-5xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2">PRODUK</span>
    </div>

    <div class="w-full flex flex-col lg:flex-row mt-20">
        <div class="lg:w-1/4 md:ml-8">
            <form action="" class="w-full px-4">
                <input type="text" class="focus:ring-2 focus:ring-green-500 w-full">
                <button class="mt-2 w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none border-1 border-green-600 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
            </form>
            <div class="w-full mt-6 px-4 h-full hidden md:block">
                <div class="border border-black w-full h-96">
                    <div class="bg-green-600 text-white border-b-2 border-black">
                        <p class="py-3 pl-3">
                            Filter
                        </p>
                    </div>
                    <div class="h-full">
                        {{--tags here blm tahu mau kek apa --}}                    
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:w-3/5 w-4/5 mx-auto lg:mx-24 gap-4 grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 lg:gap-x-12 md:ml-8 mt-8 lg:mt-0" >            

            <?php
                $products = array(
                    1,
                    2,
                    1,
                    2,
                    1,
                    
                );
            ?>

            @foreach ($products as $pr)
            <x-produkcomp imgsrc="/img/sgrwrsCap.png" :name="'test'"/>
            @endforeach

        </div>
    </div>
</div>


@endsection