@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="number" name="price" class="form-control">
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Unit Stock</label>
            <input type="number" name="unitstock" class="form-control">
            @if ($errors->has('unitstock'))
                <p class="text-danger">{{ $errors->first('unitstock') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover</label>
            <input type="file" name="cover" class="form-control">
            @if ($errors->has('cover'))
                <p class="text-danger">{{ $errors->first('cover') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <input type="checkbox" name="isvisible" id="isvisible" value="1" class="form-control" {{ old('isvisible') == 1 ? 'checked' : ''}}>
            <label for="">Visible</label>
        </div>

        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value={{ $tag->id }}>
            <label for="">{{ $tag->tag }}</label>
        @endforeach

        <button type="submit" class="btn btn-outline-success">Submit</button>
    
    </form>
</div>

@endsection