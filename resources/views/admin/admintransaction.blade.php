@extends('layouts.admin')

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



<div class="inline-flex space-x-56">
    <h1 class="text-3xl font-black">Transactions</h1>
        <form action="/admint" method="GET" class="w-full px-4">
        <div class="inline-flex">
            <input type="search" name="search" class="focus:ring-2 focus:ring-green-500 border-gray-400 w-40">
            <button type="submit" class="mt-2 w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none border-1 border-green-600 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>    
        </div>
    </form>
</div>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Orderer</th>
                <th>Email</th>
                <th>Province</th>
                <th>City</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $transaction['name'] }}</td>
                    <td>{{ $transaction['address'] }}</td>
                    <td>{{ $transaction['province'] }}</td>
                    <td>{{ $transaction['city'] }}</td>
                    <td>{{ $transaction['zip'] }}</td>
                    <td>{{ $transaction['phoneNumber'] }}</td>
                    <td>{{ $transaction['status'] }}</td>
                    <td class="p-2">
                        <a href="{{ route('transaction.edit', ['transaction' => $transaction]) }}" class="bg-green-300 rounded-md p-3 w-full">
                            Show
                        </a>
                        <form action="{{route("transaction.destroy", $transaction->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded bg-red-400 p-3 w-full mt-4">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex-row justify-center">
        {!! $transactions->links() !!}
    </div>

@endsection