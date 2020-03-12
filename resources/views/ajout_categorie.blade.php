@extends('layouts/master')
@section('content')
    
<h2 class="text-center my-5">Ajouter une categorie</h2>
<form action="{{route('save_categorie')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          
          <div class="form-group col-md-6 mx-auto">
              <input type="text" class="form-control @error('categorie') is-invalid @enderror" name="categorie"  placeholder="Entrer une catégorie" />
              @error('categorie')  
          <div class="text-danger">{{ $message }}</div>  
            @enderror
              <div class="validation"></div>
            </div>
      </div>

        
        <div class="text-center"><button class="btn btn-info my-5"type="submit">Ajouter</button></div>
  </form>
  @endsection