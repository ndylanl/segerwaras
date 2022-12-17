@extends('layouts.admin')

@section('content')

<div class="inline-flex space-x-80">
    <h1 class="text-3xl font-black pt-2">Product</h1>
    <div>
        <a href="{{ route('product.create') }}" class="bg-green-300 rounded-md p-3 w-full">Create Product</a>
        <a href="" class="bg-green-300 rounded-md p-3 w-full">Create Tag</a>
    </div>
</div>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Visibility</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $pr)
            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th>{{ $loop->iteration }}</th>
                    <td>{{ $pr['name'] }}</td>
                    <td>{{ $pr['description'] }}</td>
                    <td>{{ $pr['price'] }}</td>
                    <td>{{ $pr['unitStock'] }}</td>
                    <td>
                        <img src="/img/{{ $pr['cover'] }}" style="width: 100px; height: 100px">
                    </td>
                    <td>
                        {{$pr['isVisible']}}
                    </td>
                    <td class="p-2">
                        <a href="{{ route('product.edit', ['product'=>$pr]) }}" class="bg-green-300 rounded-md p-3 w-full">
                            Update
                        </a>
                        <form action="{{route("product.destroy", $pr->id) }}" method="POST">
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