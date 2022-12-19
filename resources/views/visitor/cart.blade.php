@extends('layouts.template')

@section('title', $title)

@section('content')

<main  id="swup" class="transition-fade">
<div class="bg-white mb-12 border border-gray-300 w-11/12 rounded-lg shadow-md mx-auto  lg:mt-28 mt-16 pb-8">
    <div class="bg-green-600 text-white border-b-2 rounded-t-md border-gray-300">
        <div class="font-black text-3xl text-center mx-auto">
            <div class="inline-flex justify-center items-center bg-green-600 w-fit px-16 py-2">
                <hr class="my-8 w-[38rem] md:w-[56rem] h-px bg-white border-0">
                <span class="absolute left-1/2 text-3xl font-black -translate-x-1/2 bg-green-600 w-fit mx-auto px-20">SHOPPING CART</span>
            </div>
        </div>
    </div>

    <div class="w-3/4 mx-auto">
        <hr class="my-8 h-px bg-green-600 border-0 mx-auto">
        <div class="w-full">
            
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Product
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Qty
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart->cartItems as $pr)
                        <x-cartitems id="{{ $pr->id }}" :name="$pr->product->name" :qty="$pr->quantity" :price="($pr->price)*($pr->quantity)"/>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



        <hr class="my-8 h-px bg-green-600 border-0 mx-auto">
        <div class="h-16">
            <?php
                $totalCost = 0; 
            ?>
            @foreach ($cart->cartItems as $pr)
                <?php
                $totalCost += $pr->quantity*$pr->price;
                ?>
            @endforeach
            <p class="text-end font-semibold text-gray-900 md:text-center md:text-2xl">Total Anda Rp.{{ $totalCost }}</p>
        </div>
    </div>

    <div class="w-4/5 p-8 mx-auto my-16">
        <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="relative z-0 mb-6 w-full group">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" id="name" class="bg-slate-50 rounded-lg border p-2.5 border-gray-300 block py-2.5 w-full text-sm text-gray-900 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                <input type="text" name="address" id="address" class="bg-slate-50 rounded-lg border p-2.5 border-gray-300 block py-2.5 w-full text-sm text-gray-900 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                    <input type="text" name="city" id="city" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="zip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ZIP</label>
                    <input type="text" name="zip" id="zip" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                    <input type="text" name="province" id="province" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                </div>
            </div>
            <div class="relative z-0 mb-6 w-full group">     
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>
            <button type="submit" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>



    


</div>
</main>




@endsection