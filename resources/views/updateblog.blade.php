@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('blog.update', ["blog"=>$blog]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
            @if ($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Content</label>
            <input type="text" name="content" class="form-control" value="{{ $blog->content }}">
            @if ($errors->has('content'))
                <p class="text-danger">{{ $errors->first('content') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Cover</label>
            <br>
            <img src="{{ asset('storage/'.$blog->cover) }}" alt="">
            <input type="file" name="cover" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-outline-success">Submit</button>
    
    </form>
</div>

@endsection