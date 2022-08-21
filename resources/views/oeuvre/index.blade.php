@extends('layouts.app2')

@section('content')

<div class="m-5">
    <h1><a href="{{ url('/oeuvre/create') }}" class="h-10 px-5 m-2 p-4 text-purple-100 transition-colors duration-150 bg-purple-600 rounded-lg focus:shadow-outline hover:bg-purple-700"> create new ouvrage</a></h1>
    <br>
    @foreach($oeuvres as $oeuvre => $value)
        <div class="ml-3 my-3">
        <span>{{ $value->id }}</span>
        <span>{{ $value->name }}</span>
        <span>{{ $value->type }}</span>
        <span>{{number_format($value->price, 2, ',', ' ')  }} DA</span>
            <div>
                    <img class="object-scale-down h-10 w-10" src="{{Storage::url($value->file_path)}}">
            </div>

        <br>
    </div>
    @endforeach        
</div>
@endsection