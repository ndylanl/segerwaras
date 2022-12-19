@extends('layouts.template')

@section('title', $title)

@section('content')


{{-- this is masthead hero section--}}
<div class="min-h-screen bg-neutral-50" style="background-image: url(https://placeimg.com/1000/800/arch);" id="1">
    
</div>

{{-- this produk teaser --}}

<div id="2" class="md:min-h-screen bg-neutral-50">
    <div class="inline-flex justify-center items-center w-full mt-10">
        <hr class="my-8 md:w-[68rem] w-72 h-px bg-green-800 border-0">
        <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-8 md:px-28 text-center">PRODUK FAVORIT</span>
    </div>

    <div class="grid grid-cols-2 mx-6 gap-8 gap-y-8 mt-8 md:hidden">
        @foreach ($products as $product)
        <div class="w-full relative">
            <a href="">
                <img src="storage/{{ $product->cover }}" alt="" class="w-full h-full shadow-lg border border-green-100">
                <p class="text-lg font-semibold">{{ $product->name }}</p>
            </a>
        </div>
        @endforeach
    </div>

    <div class="md:flex justify-center hidden">
        <div id="default-carousel" class="relative w-full mx-5 md:mx-32" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative md:h-[60vh] overflow-hidden rounded-lg">
                @foreach ($products as $product)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                        <div class="w-full lg:w-1/2 mr-4">
                            <img src="storage/{{ $product->cover }}" alt="" class="w-full h-full shadow-lg border border-green-100">
                        </div>
                        <div class="w-full lg:w-1/2 relative p-4">
                            <h4 class="text-3xl font-bold">{{ $product->name }}</h4>
                            <p class="mt-4 md:mt-16 ">{{ $product->description }}</p>
                            <button class="lg:absolute lg:bottom-1 mt-2 md:mt-5 text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">See More</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="hidden md:block">
                <div class="absolute z-30 -bottom-48 w-full px-12 grid grid-cols-4">
                    @foreach ($products as $product)
                    <button type="button" class="w-48 rounded-full" aria-current="false" aria-label="Slide {{ $loop->iteration }}" data-carousel-slide-to="{{ $loop->iteration }} - 1">
                        <img src="storage/{{ $product->cover }}" alt="" class="w-full h-auto shadow-lg border border-green-50">
                    </button>
                    @endforeach
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>




</div>

{{-- this is contact us --}}  

<div id="3" class="bg-neutral-50 h-fit py-40 md:pt-1 text-lg">
    {{-- What and Why --}}
    
    <div class="w-3/4 mx-auto my-6">
        <h1 class="text-2xl font-bold">Apa itu Seger Waras?</h1>
        <hr class="border-1 border-green">
        <div class="flex flex-col-reverse md:flex-row">
            <p class="mt-6 leading-relaxed text-sm md:text-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Perspiciatis repudiandae est cumque, vel, voluptates tenetur 
                et odit distinctio quisquam libero reprehenderit alias, voluptatem illo ipsa placeat. 
                Eligendi possimus libero facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Animi excepturi odit cum dolore incidunt ipsa ex perferendis nemo corporis saepe 
                cumque obcaecati vero a, laborum facilis, iure sapiente voluptates commodi?
            </p>
            <img class="hidden md:block w-1/2 rounded-xl shadow-xl mt-2" src="/img/jamu.jpg" alt="">
            <img class="block md:hidden w-full rounded-xl shadow-xl mt-2" src="/img/jamu.jpg" alt="">
        </div>
    </div>

    <div class="w-3/4 mx-auto mt-10 mb-8">
        <h1 class="text-2xl font-bold">Kenapa Seger Waras?</h1>
        <hr class="border-1 border-green">
        <div class="flex flex-col md:flex-row">
            <img class="hidden md:block w-1/2 rounded-xl shadow-xl mt-2" src="/img/jamu2.jpg" alt="">
            <img class="block md:hidden w-full rounded-xl shadow-xl mt-2" src="/img/jamu2.jpg" alt="">
            <p class="mt-6 md:ml-3 leading-relaxed text-sm md:text-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Perspiciatis repudiandae est cumque, vel, voluptates tenetur 
                et odit distinctio quisquam libero reprehenderit alias, voluptatem illo ipsa placeat. 
                Eligendi possimus libero facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Animi excepturi odit cum dolore incidunt ipsa ex perferendis nemo corporis saepe 
                cumque obcaecati vero a, laborum facilis, iure sapiente voluptates commodi?
            </p>
        </div>
    </div>


</div>




@endsection