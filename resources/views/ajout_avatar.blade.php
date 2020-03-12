@extends('layouts/master')
@section('content')
    
<h2 class="text-center">Ajouter un avatar</h2>
<form action="{{route('save_avatar')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          <div class="form-group col-md-6">
            <input type="text" class="form-control" name="name"  placeholder="Entrer un nom a votre avatar" />
            <div class="validation"></div>
          </div>
          
            <div class="form-group col-md-6">
                <input type="file" class="form-control" name="avatar"  />
                <div class="validation"></div>
            </div>

      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection