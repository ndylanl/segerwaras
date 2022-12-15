@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-black">Berita</h1>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Cover</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $blog['title'] }}</td>
                    <td>{{ $blog['content'] }}</td>
                    <td>
                        <img src="/img/{{ $blog['cover'] }}" style="width: 100px; height: 100px">
                    </td>
                    <td>{{ $blog['user_id'] }}</td>
                    <td>
                        <a href="adminb/{{ $blog->id }}" class="bg-green-300 rounded-md p-3 w-full">
                            Update
                        </a>
                        <form action="{{route("blog.destroy", $blog->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded bg-red-400 p-3 w-full">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection