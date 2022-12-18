@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="bg-neutral-50 pb-16 pt-32 px-10">

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

</div>

@endsection