<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')
<br>
<div id="contenu">
    <div class="container">

        @guest
                @if (Route::has('login'))
                <br>
                @endif
                @else
            <button type="button" class="btn btn-primary btn-lg">
                <a href="{{ url('/oeuvre/create') }}" > create new ouvrage</a>
            </button>
            <br>
            @endguest
        @foreach($oeuvres as $oeuvre => $value)
                        <div class="ml-3 my-3">
                            <span>{{ $value->id }}</span>
                            <span>{{ $value->name }}</span>
                            <span>{{ $value->type }}</span>
                            <span>{{number_format($value->price, 2, ',', ' ')  }} DA</span>
                                <div>
                                        <img class="" src="{{Storage::url($value->file_path)}}">
                                </div>

                            <br>
                        </div>
        @endforeach        
    </div>
</div>
@endsection


<style>
    img{
        width: 25px
    }
</style>
