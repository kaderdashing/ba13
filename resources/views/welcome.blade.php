@extends('layouts.app2')

@section('content')

@if (session('status'))
    <div class="bg-green-100 rounded-lg py-5 px-6 m-3 rounded-full text-base text-green-700 inline-flex items-center w-full" role="alert">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
      </svg>
    
         {{ session('status') }} 
    </div>
    <div class="bg-indigo-900 text-center m-4 py-4 lg:px-4 rounded-full">
      <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex w-8/12 inline-flex items-center " role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Maintenan</span>
        <span class="font-semibold mr-2 text-left flex-auto">aimer vous créé de nouvelle ouvrage ? </span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
      </div>
    </div>
@endif

<div class="container">
    <h1>welcome1</h1>
</div>
@endsection