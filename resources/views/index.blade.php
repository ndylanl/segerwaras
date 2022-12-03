@extends('layouts.template')

@section('title', $title)

@section('content')


{{-- this is masthead hero section--}}
<div class="hero min-h-screen" style="background-image: url(https://placeimg.com/1000/800/arch);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
        <div class="hero min-h-screen">

            <div class="hero-content flex-col lg:flex-row text-black">
                <img src="https://placeimg.com/1000/800/arch" class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                    <h1 class="text-5xl font-bold">Box Office News!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- this is history of company intro dll --}}

<div id="2" class="min-h-screen bg-red-200" >

</div>

{{-- this is contact info --}}  

<div id="3" class="min-h-screen bg-blue-200">

</div>

{{-- this is the scroll button--}}

<div class="dropdown dropdown-hover dropdown-top fixed bottom-6 left-6 hidden lg:block opacity-60 hover:opacity-100 scroll-smooth">
    <label tabindex="0" class="btn m-1 h-16 w-16 rounded-full">arrow</label>
    <ul tabindex="0" class="dropdown-content menu p-4 shadow bg-white rounded-box">
      <li><a href="#1">o</a></li>
      <li><a href="#2">o</a></li>
      <li><a href="#3">o</a></li>
    </ul>
</div>

@endsection