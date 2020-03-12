@extends('layouts/master')
@section('content')
    
<h2 class="text-center">Ajouter un utilisateur</h2>
<form action="{{route('save_user')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          
          <div class="form-group col-md-6">
              <input type="text"  name="name"  placeholder="Entrer votre nom"  
              class="form-control @error('name') is-invalid @enderror" />
              
          @error('name')
          <div class="text-danger">{{ $message }}
          </div>
          @enderror
              <div class="validation"></div>
            </div>
            
            <div class="form-group col-md-6">
                <input type="number"  name="age"  placeholder="Entrer votre âge " 
                class="form-control @error('age') is-invalid @enderror" />
                
            @error('age')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
                <div class="validation"></div>
            </div>

            
            <div class="form-group col-md-6">
                <input type="email"  name="email"  placeholder="Entrer votre email"
                
                class="form-control @error('email') is-invalid @enderror" />
                
            @error('email')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
                <div class="validation"></div>
            </div>
            
           
            
            
              
       
      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection