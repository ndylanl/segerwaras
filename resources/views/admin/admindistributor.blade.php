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

<div class="inline-flex space-x-96">
    <h1 class="text-3xl font-black pt-2">Distributor</h1>
    <a href="{{ route('distributor.create') }}" class="bg-green-300 rounded-md p-3 w-full">Create Distributor</a>
</div>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Desc</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributor as $dis)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $dis['name'] }}</td>
                    <td>{{ $dis['description'] }}</td>
                    <td>{{ $dis['user_id'] }}</td>
                    <td class="p-2">
                        <a href="{{ route('distributor.edit', ['distributor' => $dis]) }}" class="bg-green-300 rounded-md p-3 w-full">
                            Update
                        </a>
                        <form action="{{route("distributor.destroy", $dis->id) }}" method="POST">
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

@endsection