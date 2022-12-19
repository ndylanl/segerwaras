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
    <h1 class="text-3xl font-black">Berita</h1>
    <form action="/adminb" method="GET" class="w-full px-4">
        <div class="inline-flex">
            <input type="search" name="search" class="focus:ring-2 focus:ring-green-500 border-gray-400 w-40">
            <button type="submit" class="mt-2 w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none border-1 border-green-600 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>    
        </div>
    </form>
    <a href="{{ route('blog.create') }}" class="bg-green-300 rounded-md p-3 w-full">Create Berita</a>
</div>

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

    <div class="flex-row justify-center">
        {!! $blogs->links() !!}
    </div>

@endsection