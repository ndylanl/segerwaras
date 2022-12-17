@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-black">Users</h1>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['phone'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td class="p-2">
                        <form action="{{ route('user.update', ['user' => $user]) }}" method="POST" >
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-green-300 rounded-md p-3 w-full">
                                Set
                            </button>
                        </form>
                        <form action="{{route("user.destroy", $user->id) }}" method="POST">
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