@extends('layouts.admin')

@section('content')

<h1>Berita</h1>

    <table class="table table-striped">
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
                        <a href="adminb/{{ $br->id }}">
                            Update
                        </a>
                        <a href="">
                            Remove
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection