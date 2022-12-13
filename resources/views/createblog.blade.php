@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
            @if ($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Content</label>
            <input type="text" name="content" class="form-control">
            @if ($errors->has('content'))
                <p class="text-danger">{{ $errors->first('content') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover</label>
            <input type="file" name="cover" class="form-control">
            @if ($errors->has('cover'))
                <p class="text-danger">{{ $errors->first('cover') }}</p>
            @endif
        </div>
    
        <button type="submit" class="btn btn-outline-success">Submit</button>
    
    </form>
</div>

@endsection