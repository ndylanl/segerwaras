@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('product.update', ['product'=>$product]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $product->description }}">
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Unit Stock</label>
            <input type="number" name="unitstock" class="form-control" value="{{ $product->unitStock }}">
            @if ($errors->has('unitstock'))
                <p class="text-danger">{{ $errors->first('unitstock') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover</label>
            <br>
            <img src="{{ asset('storage/'.$product->cover) }}" alt="">
            <input type="file" name="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Visible</label>
            <input type="checkbox" name="isvisible" id="isvisible" value="1" class="form-control" {{ $product->isVisible ? 'checked' : ''}}>
        </div>

        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value={{ $tag->id }} {{ $product->tags()->where('tag_id', $tag->id)->exists() ? 'checked' : ''}}>
            <label for="">{{ $tag->tag }}</label>
        @endforeach

        <button type="submit" class="btn btn-outline-success">Submit</button>
    
    </form>
</div>

@endsection