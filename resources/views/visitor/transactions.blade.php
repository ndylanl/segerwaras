@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="bg-neutral-50 pb-16 pt-32 px-10">

    <h1 class="text-3xl font-black">Transactions</h1>

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
                        <a href="transaction/{{ $transaction['id'] }}" class="bg-green-300 rounded-md p-3 w-full">Show</a>
                        @if ($transaction->status == 'processing')
                        <form action="{{route("transaction.update", ['transaction' => $transaction]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="rounded bg-red-400 p-3 w-full mt-4">
                                Cancel
                            </button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection