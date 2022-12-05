@extends('layouts.template')

@section('title', $title)

@section('content')


{{-- this is masthead hero section--}}
<div class="min-h-screen bg-slate-100" style="background-image: url(https://placeimg.com/1000/800/arch);" id="1">
    
</div>

{{-- this produk teaser --}}

<div id="2" class="min-h-screen bg-slate-100">
    <div class="inline-flex justify-center items-center w-full mt-10">
        <hr class="my-8 w-[50rem] h-px bg-green-800 border-0">
        <span class="absolute left-1/2 px-3 text-5xl font-black bg-slate-100 text-gray-900 -translate-x-1/2">PRODUK KAMI</span>
    </div>

    <div class="flex justify-center">
        <div id="default-carousel" class="relative w-4/5" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="w-full bg-red-400 h-full flex flex-col md:flex-row">
                        <div>
                            <img src="img/sgrwrsCap.png" alt="">
                        </div>
                        <div>
                            title produk
                            produk desc
                            buy button
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
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

{{-- this is contact info --}}  

<div id="3" class="min-h-screen bg-slate-100">

</div>

{{-- this is the scroll button--}}


<div data-dial-init class="fixed bottom-12 left-8 group">
    <div id="speed-dial-menu-bottom-left" class="flex hidden flex-col items-center mb-4 space-y-2">
        <a href="#1" type="button" data-tooltip-target="tooltip-share" data-tooltip-placement="left" class="flex justify-center items-center w-[16px] h-[16px] text-gray-500 hover:text-gray-900 bg-gray-400 rounded-full border border-gray-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 focus:outline-none">
            
        </a>
        <a href="#2" type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left" class="flex justify-center items-center w-[16px] h-[16px] text-gray-500 hover:text-gray-900 bg-gray-400 rounded-full border border-gray-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 focus:outline-none">
            
        </a>
        <a href="#3" type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[16px] h-[16px] text-gray-500 hover:text-gray-900 bg-gray-400 rounded-full border border-gray-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 focus:outline-none">
            
        </a>
        <a href="#4" type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left" class="flex justify-center items-center w-[16px] h-[16px] text-gray-500 hover:text-gray-900 bg-gray-400 rounded-full border border-gray-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 focus:outline-none">
            
        </a>
    </div>
    <button type="button" data-dial-toggle="speed-dial-menu-bottom-left" aria-controls="speed-dial-menu-bottom-left" aria-expanded="false" class="flex justify-center items-center w-14 h-14 text-black bg-black rounded-full border border-black hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 focus:outline-none">
        <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>


@endsection