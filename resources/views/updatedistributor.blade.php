@extends('layouts.template')

@section('title', $title)

@section('content')

<div class="p-10">
    <form action="{{ route('distributor.update', ["distributor"=>$distributor]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $distributor->name }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $distributor->description }}">
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
    
        <button type="submit" class="btn btn-outline-success">Submit</button>
    
    </form>
</div>

@endsection