@extends('layouts/master')
@section('content')
    
<h2 class="text-center">Ajouter une image</h2>
<form action="{{route('save_image')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          
          
            <div class="form-group col-md-6">
                <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="@if($errors->first('image'))
                @else{{old('image')}}  @endif" />
                @error('image')  
            <div class="text-danger">{{ $message }}</div>  
              @enderror
                <div class="validation"></div>
            </div>
              
      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection