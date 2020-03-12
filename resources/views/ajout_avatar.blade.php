@extends('layouts/master')
@section('content')
    
<h2 class="text-center my-5">Ajouter un avatar</h2>
<form action="{{route('save_avatar')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center container mx-auto">
          
          <div class="form-group col-md-6">
<<<<<<< HEAD
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Entrer un nom à votre avatar" />
=======
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if($errors->first('name'))
            @else{{old('name')}}  @endif" placeholder="Entrer un nom a votre avatar" />
>>>>>>> 0dac428c8fcb681f46377bf038518908bbb6ac81
            @error('name')  
          <div class="text-danger">{{ $message }}</div>  
              @enderror
            <div class="validation"></div>
          </div>
          
            <div class="form-group col-md-6">
                <input type="file" class=" @error('avatar') is-invalid @enderror" name="avatar"  />
                @error('avatar')  
              <div class="text-danger">{{ $message }}</div>  
                  @enderror
                <div class="validation"></div>
            </div>

      </div>

        
        <div class="text-center my-5"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection