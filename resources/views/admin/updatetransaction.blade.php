@extends('layouts.admin')

@section('title', $title)

@section('content')


@auth
    @if (Auth:: user()->role != 'admin')
    <?php
    header("/");
    exit();
    ?>
    @endif
    @endauth
    @guest
    <?php
    header("/");
    exit();
    ?>
    @endguest

<div class="p-10">

    <h1 class="text-3xl font-black pt-2">Detail</h1>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6 pb-10">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaction->cart->cartItems as $item)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity * $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('transaction.update', ["transaction"=>$transaction]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="relative z-0 mt-10 mb-6 w-full group">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input value="{{ $transaction->name }}" type="text" name="name" id="name" class="bg-slate-50 rounded-lg border p-2.5 border-gray-300 block py-2.5 w-full text-sm text-gray-900 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
            <input value="{{ $transaction->address }}" type="text" name="address" id="address" class="bg-slate-50 rounded-lg border p-2.5 border-gray-300 block py-2.5 w-full text-sm text-gray-900 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                <input value="{{ $transaction->city }}" type="text" name="city" id="city" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="zip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ZIP</label>
                <input value="{{ $transaction->zip }}" type="text" name="zip" id="zip" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                <input value="{{ $transaction->province }}" type="text" name="province" id="province" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input value="{{ $transaction->phoneNumber }}" type="text" name="phone" id="phone" class="block py-2.5 p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            </div>
        </div>
        <div class="relative z-0 mb-6 w-full group">     
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $transaction->message }}</textarea>
        </div class="relative z-0 mb-6 w-full group">
        <div class="relative z-0 mb-6 w-full group">
            <input type="radio" name="status" value="processing" {{ $transaction->status == "processing" ? 'checked' : '' }}>
            <label for="">Processing</label>
            <input type="radio" name="status" value="done" {{ $transaction->status == "done" ? 'checked' : '' }}>
            <label for="">Done</label>
            <input type="radio" name="status" value="cancelled" {{ $transaction->status == "cancelled" ? 'checked' : '' }}>
            <label for="">Cancelled</label>
        </div>
    
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

@endsection