<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@extends('layouts.app')

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

<div class="m-5">
    

    <form action="{{ route('oeuvre.store') }}" method="POST" enctype="multipart/form-data" class="form-floating">
                    <!-- Add CSRF Token -->
                    @csrf
        <div class="form-floating mb-3">
            <input type="name" name="name"  class="form-control" id="floatingInput" placeholder="" required>
            <label for="floatingInput" class="">nom d'ouvrage</label>
        </div>
        
        <div class="form-floating mb-3">
         
              <input type=""  name="price" class="form-control" id="floatingInput" placeholder=" " required>
              <label for="floatingInput" class="">prix</label>
        </div>
            <div class="form-floating">
                
                <select id="" name="type" class="form-select" aria-label="Floating label select example">
                
                    <option value="simple" selected >simple</option>
                    <option value="décoré">decoré</option>
                    <option value="autre">autre</option>
                   
            </select>
            <label for="floatingSelect" name="type" >coisir votre model</label>
        </div>

        <br>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" for="file-upload" >Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input"    
            id="file-upload"  name="file"
            aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="file-upload">choisir image</label>
          </div>
        </div>

<br>  <br> <br>

<div class="my-3">
  <label class=""> Cover photo </label>
  <div class="">
    <div class="">
      <div class="">
        <label for="file-upload" class="">
          <span>Upload a file</span>
          <input id="file-upload"  name="file" type="file" class="" required>
        </label>
        <p class="">or drag and drop</p>
      </div>
      <p class="">PNG, JPG, GIF up to 10MB</p>
    </div>
  </div>
</div>  


    
        <button type="submit" class="">Submit</button>
      </form>
         
</div>
<div class="fethi">
  <br>
</div>
@endsection



