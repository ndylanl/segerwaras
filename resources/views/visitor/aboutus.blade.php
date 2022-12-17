@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50">
    <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
        <hr class="my-8 w-[68rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-28">VISI & MISI</span>
    </div>


    {{--visi and misi--}}    
    <div class="mx-auto w-1/2 mt-10">
        <p class="text-center">
            Menjadi perusahaan farmasi hijau terkemuka Indonesia yang mendorong kualitas hidup melalui penelitian, pengembangan, dan pemasaran obat-obatan berkualitas tinggi.        
        </p>
        <p class="text-center mt-8">
            Berkomitmen untuk memberikan solusi yang aman dan handal untuk pengobatan melalui produk farmasi yang responsif terhadap kebutuhan dan aspirasi masyarakat indonesia; meningkatkan kesadaran akan kesehatan melalui layanan yang efisien dan berbasis teknologi modern; dan untuk berperan aktif dalam mendorong kesehatan dan kualitas hidup masyarakat Indonesia.
        </p>
    </div>

    {{--sejarah--}}    
    {{-- <div class="w-4/5 my-16 h-fit mx-auto relative">
        <div class="bg-gray-600 rounded-full h-full w-1 absolute left-1/2"></div>

        <div class="block md:grid md:grid-cols-2 gap-y-4 h-fit mx-auto bg-red-200 p-2">
            <div class="w-full h-64 bg-blue-200">
                img
            </div>
            <div class="w-full h-64 bg-green-200">
                text
            </div>
            <div class="w-full h-64 bg-green-200">
                text
            </div>
            <div class="w-full h-64 bg-blue-200">
                img
            </div>
            <div class="w-full h-64 bg-blue-200">
                img
            </div>
            <div class="w-full h-64 bg-green-200">
                text
            </div>
            <div class="w-full h-64 bg-green-200">
                text
            </div>
            <div class="w-full h-64 bg-blue-200">
                img
            </div>
        </div>
    </div> --}}




    {{--distributor carousel--}}    
    <div class="mx-auto w-9/12">
        <div class="inline-flex justify-center items-center w-full lg:mt-28 mt-16">
            <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-14">See our Distributors</span>
        </div>
        <div class="flex justify-center">
            <div id="default-carousel" class="relative w-4/5" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[60vh] overflow-hidden rounded-lg">

                    @foreach ($distributor as $dist)
                    <x-carouselItem :name="$dist['name']" :desc="$dist['description']"/>
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
            <div class="w-full lg:w-1/4 m-4">
                <img src="img/pabrik.jpg" alt="" class="w-full h-auto">
            </div>
        </div>
    </div>

    {{--Plant carousel--}}    

    <div class="w-9/12 mx-auto">
        <div class="inline-flex justify-center items-center w-full">
            <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
            <span class="absolute left-1/2 text-3xl font-black bg-neutral-50 text-gray-900 -translate-x-1/2 px-14">See our Factories</span>
        </div>
        <div class="flex justify-center">
            <div class="w-full lg:w-1/4 m-4">
                <img src="img/pabrik.jpg" alt="" class="w-full h-auto">
            </div>
            <div id="default-carousel" class="relative w-4/5" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[60vh] overflow-hidden rounded-lg">

                    @foreach ($plant as $pl)
                    <x-carouselItem :name="$pl['name']" :desc="$pl['description']"/>
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


