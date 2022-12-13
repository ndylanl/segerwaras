@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
        <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 px-3 text-5xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2">VISI & MISI</span>
    </div>

    <div class="mx-auto w-1/2 mt-10">
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, quidem magnam recusandae velit dolorem iure quos. Adipisci libero debitis cupiditate, rerum cum similique temporibus? Animi maxime sit incidunt autem possimus?</p>
        <p class="text-center mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, quidem magnam recusandae velit dolorem iure quos. Adipisci libero debitis cupiditate, rerum cum similique temporibus? Animi maxime sit incidunt autem possimus?</p>
    </div>


    {{--distributor carousel--}}    
    <div class="w-3/4 mx-auto">
        <div class="text-2xl text-center font-extrabold mx-auto w-full mt-10">See our Distributors</div>
        <div class="flex justify-center">
            <div id="default-carousel" class="relative w-4/5" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[60vh] overflow-hidden rounded-lg">
                     

                    <?php
                        $distributor = array(
                            1,
                            2,
                            3,
                            4,
                            5,
                            6
                        );
                    ?>

                    @foreach ($distributor as $dist)
                    <x-carouselItem :name="$dist" :desc="$dist"/>
                    @endforeach

                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-600 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-600 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    {{--Plant carousel--}}    

    <div class="w-3/4 mx-auto">
        <div class="text-2xl text-center font-extrabold mx-auto w-full mt-10">See our Plants</div>
        <div class="flex justify-center">
            <div id="default-carousel" class="relative w-4/5" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[60vh] overflow-hidden rounded-lg">
                     

                    <?php
                        $plants = array(
                            1,
                            2,
                            3,
                            4,
                            5,
                            6
                        );
                    ?>

                    @foreach ($plants as $pl)
                    <x-carouselItem :name="$pl" :desc="$pl"/>
                    @endforeach

                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-600 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-600 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>


</div>


@endsection