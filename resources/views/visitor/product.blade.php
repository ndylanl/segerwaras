@extends('layouts.template')

@section('title', $title)

@section('content')


<main  id="swup" class="transition-fade bg-neutral-50">
<div class="bg-white mb-12 border border-gray-300 w-11/12 rounded-lg shadow-md mx-auto  lg:mt-28 mt-16 pb-8">
    <div class="bg-green-600 text-white border-b-2 rounded-t-md border-gray-300">
        <div class="font-black text-3xl text-center mx-auto">
            <div class="inline-flex justify-center items-center bg-green-600 w-fit px-16 py-2">
                <hr class="my-8 w-[38rem] md:w-[56rem] h-px bg-white border-0">
                <span class="absolute left-1/2 text-3xl font-black -translate-x-1/2 bg-green-600 w-fit mx-auto px-20">PRODUK</span>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col lg:flex-row mt-8 md:mt-20 bg-neutral-50">
        <div class="lg:w-1/4 md:ml-8">
            <form action="/products" method="GET" class="w-full px-4">
                <input type="search" name="search" class="focus:ring-2 focus:ring-green-500 w-full border-gray-400">
                <button type="submit" class="mt-2 w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none border-1 border-green-600 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
            </form>
            <div class="w-full mt-6 px-4 h-full hidden md:block">
                <div class="border border-gray-300 w-full h-96 rounded-lg shadow-md">
                    <div class="bg-green-600 text-white border-b-2 rounded-t-md border-gray-300">
                        <p class="py-3 pl-3">
                            Filter
                        </p>
                    </div>
                    <div class="h-full">
                        <form action="/products" method="GET">
                            @foreach ($tags as $tag)
                            <div class="flex items-center p-4 mx-auto">
                                <input type="checkbox" name="tags[]" value={{ $tag->id }} class="w-4 h-4 text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-green-500 focus:ring-2">
                                <label for="" class="ml-6">{{ $tag->tag }}</label>
                            </div>  
                            @endforeach
                            <button class="w-full mt-3 text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none border-1 border-green-600 focus:ring-green-300 font-medium rounded-b-md text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Filter
                            </button>
                        </form>
                                      
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:w-3/5 w-4/5 mx-auto lg:mx-24 gap-4 grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 lg:gap-x-12 md:ml-8 mt-8 lg:mt-0" >            

            @foreach ($products as $pr)
            <x-produkcomp :imgsrc="$pr['cover']" :name="$pr['name']" link="products/{{ $pr->id }}"/>
            @endforeach

        </div>
    </div>
</div>
</main>



@endsection