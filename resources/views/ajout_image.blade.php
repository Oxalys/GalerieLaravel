@extends('layouts/master')
@section('content')
    
<h2 class="text-center">Ajouter une image</h2>
<form action="{{route('save_image')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          
          
            <div class="form-group col-md-6">
                <input type="file" class="form-control" name="url"  placeholder="Your URL" />
                <div class="validation"></div>
            </div>
              
      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection