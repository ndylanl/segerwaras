@extends('layouts.admin')

@section('content')

<h1>Product</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Visibility</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $pr)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $pr['name'] }}</td>
                    <td>{{ $pr['description'] }}</td>
                    <td>{{ $pr['price'] }}</td>
                    <td>{{ $pr['unitStock'] }}</td>
                    <td>
                        <img src="/img/{{ $pr['cover'] }}" style="width: 100px; height: 100px">
                    </td>
                    <td>{{ $pr['isVisible'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection