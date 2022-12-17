@extends('layouts.admin')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="number" name="price" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Unit Stock</label>
            <input type="number" name="unitstock" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
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

        <div class="mb-3">
            <label for="">Tags:</label>
            @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value={{ $tag->id }}>
            <label for="">{{ $tag->tag }}</label>
        @endforeach
        </div>

        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

@endsection