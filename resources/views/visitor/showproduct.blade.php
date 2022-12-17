@extends('layouts.template')

@section('title', $title)

@section('content')



<div class="bg-neutral-50 pb-10">

    <h1 class="font-black text-3xl text-gray-800 text-center mx-auto pt-32">{{ $product['name'] }}</h1>



    <div class="md:grid md:grid-cols-2 lg:px-40 lg:py-10 bg-neutral-50">
        <img src="/img/products/{{ $product['cover'] }}" alt="" class="lg:h-96 w-auto mx-auto mt-10">
        <div class="mt-16 lg:h-96 px-10 md:p-0">
            <h1 class="text-2xl">Rp. {{ $product['price'] }}</h1>
            <p class="mt-8">{{ $product['description'] }}</p>
            <p class="mt-8">{{ $product['unitStock'] }} Jumlah Tersedia</p>
            <?php
                $attnum = 1;
            ?>
            @auth
            <form action="{{ route('cartItem.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-3 w-fit mt-10">

                    <button type="button" class="border-gray-500 border hover:ring-1 hover:ring-green-500 text-3xl" id="substract">
                        -
                    </button>
                    <input class="text-center" type="number" min="1" max="{{ $product['unitStock'] }}" id="quantity" name="quantity" value={{ $attnum }}>
                    <button type="button" class="border-gray-500 border hover:ring-1 hover:ring-green-500 text-3xl" id="add">
                        +
                    </button>

                    <input type="number" name="product" value="{{ $product['id'] }}" hidden>
    
                </div>
                <button type="submit" class="text-white mt-4 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Add to Cart
                </button>
            </form>
            @endauth

            @guest
            <div class="mt-10">
                <a href="/login" class="text-white w-32 mt-32 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Login to Purchase
                </a>
            </div>
            @endguest
            
        </div>
    </div>

    <div class="bg-neutral-50 pt-8 md:pt-0 px-4 md:px-20 pb-20">
        <div class="border border-gray-300 px-5 pt-5 pb-10 mx-auto bg-white rounded-lg shadow-md md:w-3/4">
            @auth
            <form action="{{ route('review.store') }}" method="POST"  class="w-full">
                @csrf
                <div class="mb-3">
                    <label for="">Comment</label>
                    <textarea name="content" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500"></textarea>
                    <div class="w-full flex justify-between">
                        <div class="rate">
                            <input type="radio" id="starr5" name="score" value="5" />
                            <label for="starr5" title="text">5 stars</label>
                            <input type="radio" id="starr4" name="score" value="4" />
                            <label for="starr4" title="text">4 stars</label>
                            <input type="radio" id="starr3" name="score" value="3" />
                            <label for="starr3" title="text">3 stars</label>
                            <input type="radio" id="starr2" name="score" value="2" />
                            <label for="starr2" title="text">2 stars</label>
                            <input type="radio" id="starr1" name="score" value="1" />
                            <label for="starr1" title="text">1 star</label>
                          </div>
                          <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                          <button type="submit" class="bg-green-300 rounded py-2 px-4 mt-2 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
                    </div>
                </div>
            </form>
            @endauth
            <hr class="mb-2">
            @foreach ($product->reviews->reverse() as $r)
                @if ($r->user != Auth:: user())
                <div class="bg-gray-50 rounded shadow-lg p-3 border float-none border-gray-200 mb-4">
                    <div class="flex mt-2">
                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < floor($r['score']))
                                    <x-filled-star />
                                @else
                                    <x-empty-star />
                                @endif
                            @endfor
                        </div>
                        <p class="ml-1 md:ml-2 text-xs sm:text-sm font-medium text-gray-500 dark:text-gray-400">{{ floor($r['score']) }} out of 5</p>
                    </div>
                    <p class="-mt-6 text-end">{{ $r->user['name'] }}</p>
                    <p class="mt-2">{{ $r['content'] }}</p>
                </div>
                @endif  
                @if ($r->user == Auth:: user())
                
                    <div class="bg-gray-50 rounded shadow-lg p-3 border float-none border-gray-200 mb-4">
                        <div class="flex justify-between">
                            <label for="" class="ml-2">Your Comment</label>
                            <form action="{{ route('review.show', ["review"=>$r]) }}" method="POST" enctype="multipart/form-data" class="-mt-2 mb-2">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                <button type="submit" class="bg-red-500 text-white last:rounded py-1 px-2 text-sm mt-2 hover:bg-red-700 hover:ring-2 hover:ring-red-700">X</button>
                            </form>
                        </div>
                        <form action="{{ route('review.update', ["review"=>$r]) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')
                        <textarea name="content" rows="2" class="block p-2.5 w-full text-gray-900 bg-white rounded-lg border-gray-200 focus:ring-green-500 focus:border-green-500">{{ $r['content'] }}</textarea>
                        <div class="w-full flex justify-between">
                            <div class="rate">
                                <input type="radio" id="star{{ $r['id'] }}5" name="score" value="5" />
                                <label for="star{{ $r['id'] }}5" title="text">5 stars</label>
                                <input type="radio" id="star{{ $r['id'] }}4" name="score" value="4" />
                                <label for="star{{ $r['id'] }}4" title="text">4 stars</label>
                                <input type="radio" id="star{{ $r['id'] }}3" name="score" value="3" />
                                <label for="star{{ $r['id'] }}3" title="text">3 stars</label>
                                <input type="radio" id="star{{ $r['id'] }}2" name="score" value="2" />
                                <label for="star{{ $r['id'] }}2" title="text">2 stars</label>
                                <input type="radio" id="star{{ $r['id'] }}1" name="score" value="1" />
                                <label for="star{{ $r['id'] }}1" title="text">1 star</label>
                              </div>
                              <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                              <button type="submit" class="bg-green-300 rounded py-2 px-4 mt-2 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Edit</button>
                        </div>
                    </form>
                    </div>                
                
                <script>
                    document.getElementById("star{{ $r['id'] }}{{ floor($r['score']) }}").checked = true;
                </script>
                @endif
                
            @endforeach
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('add').addEventListener('click', function() {
                if(document.getElementById('quantity').value != "{{ $product['unitStock'] }}"){
                    document.getElementById('quantity').value++;
                }
            });
            document.getElementById('substract').addEventListener('click', function() {
                if(document.getElementById('quantity').value != 0){
                    document.getElementById('quantity').value--;
                }
            });
        });
    </script>


@endsection