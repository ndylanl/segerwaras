@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-black">Berita</h1>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Cover</th>
                <th>Creator</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $blog['title'] }}</td>
                    <td>{{ $blog['content'] }}</td>
                    <td>
                        <img src="/img/{{ $blog['cover'] }}" style="width: 100px; height: 100px">
                    </td>
                    <td>{{ $blog['user_id'] }}</td>
                    <td class="p-2">
                        <a href="{{ route("blog.edit", ['blog'=>$blog]) }}" class="bg-green-300 rounded-md p-3 w-full">
                            Update
                        </a>
                        <form action="{{route("blog.destroy", $blog->id) }}" method="POST">
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