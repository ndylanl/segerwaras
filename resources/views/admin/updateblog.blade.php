@extends('layouts.admin')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('blog.update', ["blog"=>$blog]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Title</label>
            <textarea name="title" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $blog->title }}</textarea>
            @if ($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="">Content</label>
            <textarea name="content" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $blog->content }}</textarea>
            @if ($errors->has('content'))
                <p class="text-danger">{{ $errors->first('content') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-gray-900 dark:text-white" for="">Upload file</label>
            <img src="{{ asset('storage/'.$blog->cover) }}" alt="">
            <input class="block w-full text-sm text-green-700 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer" type="file" name="cover" class="form-control">
        </div>
    
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

@endsection