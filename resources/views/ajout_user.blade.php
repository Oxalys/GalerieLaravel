@extends('layouts/master')
@section('content')
    
<h2 class="text-center">Ajouter un utilisateur</h2>
<form action="{{route('save_user')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-row text-center">
          
          
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="name"  placeholder="Entrer votre nom" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="age"  placeholder="Entrer votre âge " />
                <div class="validation"></div>
            </div>

            <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email"  placeholder="Entrer votre email" />
                <div class="validation"></div>
            </div>
            
           
            <select name="id_genre" id="" class='custom-select'>
              @foreach ($genres as $item)
                  
              <option value="{{$item->id}}">{{$item->genre}}</option>
              @endforeach
            </select>
            <select name="id_auteur" id="" class='custom-select'>
                @foreach ($auteurs as $item)
                    
                <option value="{{$item->id}}">{{$item->name}}</option>
                
                @endforeach
              </select>
              
              
              <label for="story">Resumé:</label>
              <textarea id="story" name="resume"
                    rows="5" cols="33">
              </textarea>
              <ul>
                @foreach ($errors->all() as $e)
                    <li class="text-danger">{{$e}}</li>
                @endforeach    
            </ul>
      </div>

        
        <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
  </form>
  @endsection