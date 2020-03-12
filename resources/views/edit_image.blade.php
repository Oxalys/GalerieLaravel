@extends ('layouts/master')
@section('content')
<h2>Modification d'une image</h2>
<form action="{{route('update_image' , $images->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row text-center">

        <div class="form-group col-md-6">
            <input type="text"  name="image" value='{{old('image', $images->image)}}' placeholder="Introduit un url" />
            @error('image')
        <div class="text-danger">{{ $message }}
        </div>
        @enderror
            <div class="validation"></div>

        </div>
          
  </div>

    
    <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
</form>
@endsection