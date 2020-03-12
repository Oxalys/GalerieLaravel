@extends ('layouts/master')
@section('content')
<h2>Modification d'une categorie</h2>
<form action="{{route('update_categorie' , $categories->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row text-center">

        <div class="form-group col-md-6">
              <input type="text" name="categorie"  placeholder="Entrer une catégorie" value="@if($errors->first('categorie'))
              @else{{old('categorie')}}  @endif" class="form-control @error('categorie') is-invalid @enderror"  />
                
              @error('categorie')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror
              <div class="validation"></div>
            </div>
      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection