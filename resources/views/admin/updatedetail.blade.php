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
    <form action="{{ route('detail.update', ["detail"=>$detail]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Location</label>
            <input type="text" name="location" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $detail->location }}">
            @if ($errors->has('location'))
                <p class="text-danger">{{ $errors->first('location') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Time Open</label>
            <input type="time" name="open" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $detail->timeOpen }}">
            @if ($errors->has('open'))
                <p class="text-danger">{{ $errors->first('open') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Time Closed</label>
            <input type="time" name="closed" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $detail->timeClosed }}">
            @if ($errors->has('closed'))
                <p class="text-danger">{{ $errors->first('closed') }}</p>
            @endif
        </div>
    
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

@endsection