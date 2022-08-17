@extends('layouts.app2')

@section('content')

<div class="m-5">
    <h1>salut</h1>
    @foreach($oeuvres as $oeuvre => $value)
        <div class="ml-3 my-3">
        <span>{{ $value->id }}</span>
        <span>{{ $value->name }}</span>
        <span>{{ $value->type }}</span>
      
            <img src="{{$value->file_path}}" alt="">
        <!-- we will also add show, edit, and delete buttons -->
        <br>
    </div>
    @endforeach        
</div>
@endsection