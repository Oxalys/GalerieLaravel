@extends ('layouts/master')
@section('content')
<h2 class=" my-4 text-center">Modification d'un avatar</h2>
<form action="{{route('update_avatar' , $avatars->id)}}" method="post" enctype="multipart/form-data">
    @csrf
<<<<<<< HEAD
    <div class="form-row text-center mx-auto d-flex">
        <div class="form-group col">
            <input type="text" value="@if($errors->first('name'))
            @else{{old('name')}}  @endif" name="name"  placeholder="Entrer un nom à votre avatar" 
=======
    <div class="form-row text-center">
        <div class="form-group col-md-6">
            <input type="text" value='{{old('name', $avatars->name)}}'  name="name"  placeholder="Entrer un nom a votre avatar" 
>>>>>>> 0dac428c8fcb681f46377bf038518908bbb6ac81
            class="form-control @error('name') is-invalid @enderror" />
            
        @error('name')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
            <div class="validation"></div>
          </div>
          
            <div class="form-group col">
                <input type="file"  name="avatar"  />
                @error('avatar')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
                <div class="validation"></div>
            </div>

      </div>

        
        <div class="text-center  my-4"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection