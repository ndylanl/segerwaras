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
    <h1 class="text-3xl font-black pb-4">Distributor</h1>
    <form action="{{ route('distributor.update', ["distributor"=>$distributor]) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ $distributor->name }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea name="description" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $distributor->description }}</textarea>
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
    
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>
    
    </form>
</div>

<div class="p-10">
    <h1 class="text-3xl font-black">Details</h1>
    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400 mt-6">
        <thead class="text-md text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>No</th>
                <th>Location</th>
                <th>Open</th>
                <th>Closed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributor->details as $detail)
                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $detail['location'] }}</td>
                    <td>{{ $detail['timeOpen'] }}</td>
                    <td>{{ $detail['timeClosed'] }}</td>
                    <td class="p-2">
                        <a href="{{ route('detail.edit', ['detail'=>$detail]) }}" class="bg-green-300 rounded-md p-3 w-full">
                            Update
                        </a>
                        <form action="{{ route('detail.destroy', $detail->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded bg-red-400 p-3 w-full mt-4">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="p-10">
    <h1 class="text-3xl font-black pb-4">Create Detail</h1>
    <form action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="">Location</label>
            <input type="text" name="location" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('location'))
                <p class="text-danger">{{ $errors->first('location') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Time Open</label>
            <input type="time" name="open" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('open'))
                <p class="text-danger">{{ $errors->first('open') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Time Closed</label>
            <input type="time" name="closed" class="block p-2.5 w-full text-sm text-gray-900 bg-slate-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
            @if ($errors->has('closed'))
                <p class="text-danger">{{ $errors->first('closed') }}</p>
            @endif
        </div>
        <input type="text" name="id" value="{{ $distributor['id'] }}" hidden>
    
        <button type="submit" class="bg-green-300 rounded p-3 mt-5 hover:bg-green-500 hover:ring-2 hover:ring-green-500">Submit</button>


    </form>
</div>

@endsection