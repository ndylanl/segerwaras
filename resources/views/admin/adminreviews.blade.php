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

<h1 class="text-3xl font-black">Reviews</h1>

    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Content</th>
                <th>Score</th>
                <th>Product</th>
                <th>Commenter</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $review['content'] }}</td>
                    <td>{{ $review['score'] }}</td>
                    <td>{{ $review->product->name }}</td>
                    <td>{{ $review->user->name }}</td>
                    <td class="p-2">
                        <form action="{{route("review.destroy", $review->id) }}" method="POST">
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