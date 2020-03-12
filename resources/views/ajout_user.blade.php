@extends('layouts/master')
@section('content')
    
<h2 class="text-center">Ajouter un utilisateur</h2>
<form action="{{route('save_user')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="name"  placeholder="Entrer votre nom"  value="@if($errors->first('name'))
              @else{{old('name')}}  @endif"
              class="form-control @error('name') is-invalid @enderror" />
              
          @error('name')
          <div class="text-danger">{{ $message }}
          </div>
          @enderror
              <div class="validation"></div>
            </div>
            
            <div class="form-group col-md-6">
                <input type="number" class="form-control " name="age"  placeholder="Entrer votre âge "  value="@if($errors->first('name'))
                @else{{old('name')}}  @endif"
                class="form-control @error('name') is-invalid @enderror" />
                
            @error('name')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
                <div class="validation"></div>
              </div>
                <div class="validation"></div>
            </div>

            <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email"  placeholder="Entrer votre email" />
                <div class="validation"></div>
            </div>
            
           
            
            
              
       
      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection