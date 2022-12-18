@extends('layouts.admin')

@section('title', $title)

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

<div class="p-10">
    <form action="{{ route('product.update', ['product'=>$product]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $product->name }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea name="description" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $product->description }}</textarea>
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="number" name="price" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $product->price }}">
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Unit Stock</label>
            <input type="number" name="unitstock" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $product->unitStock }}">
            @if ($errors->has('unitstock'))
                <p class="text-danger">{{ $errors->first('unitstock') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover</label>
            <br>
            <img src="{{ asset('storage/'.$product->cover) }}" alt="">
            <input type="file" name="cover" class="block w-full text-sm text-green-700 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer">
        </div>
        <div class="mb-3">
            <label for="">Visible</label>
            <input type="checkbox" name="isvisible" id="isvisible" value="1" class="w-4 h-4 text-green-400 bg-gray-100 rounded border-gray-300 focus:ring-green-500" {{ $product->isVisible ? 'checked' : ''}}>
        </div>
        <div class="mb-3">
            <label for="">Tags</label>
            <div class="w-full">
                @foreach ($tags as $tag)
                <input type="checkbox" name="tags[]" value={{ $tag->id }} {{ $product->tags()->where('tag_id', $tag->id)->exists() ? 'checked' : ''}} class="w-4 h-4 text-green-400 bg-gray-100 rounded border-gray-300 focus:ring-green-500 mr-2">
                <label for="" class="mr-8">{{ $tag->tag }}</label>
                @endforeach
            </div>
        </div>
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

@endsection