@extends('layouts.admin')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('tag.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="">Tag</label>
            <input type="text" name="tag" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('tag'))
                <p class="text-danger">{{ $errors->first('tag') }}</p>
            @endif
        </div>
    
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

@endsection