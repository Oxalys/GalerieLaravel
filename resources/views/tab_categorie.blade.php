@extends('layouts/master')
@section('content')




<h2  class="text-center">Livres</h2>
<div class="text-center py-5">
    <a href="{{route('ajout_livre')}}"><button class="btn btn-success text-center">Ajouter</button></a>
 </div>

<table class="table" action='{{route('edit_delete_livre')}}'>
 <thead>
   <tr>
     <th scope="col">ISBN</th>
     <th scope="col">Titre</th>
     <th scope="col">Image</th>
     <th scope="col">Date de publication</th>
     <th scope="col">ID du genre</th>
     <th scope="col">ID de l'auteur</th>
     <th scope="col">Action</th>
     
   </tr>
 </thead>
 <tbody>
     @foreach ($livres as $item)
         {{-- le dolar se trouve dans le controller le compact --}}
     
         <tr>
             <td>{{$item->isbn}}</td>
             <td>{{$item->titre}}</td>
             <td><img src="{{$item->url}}" alt=""></td>
             <td>{{$item->date_publi}}</td>
             <td>
               @foreach ($genres as $genre)
              @if ($item->id_genre == $genre->id)
              {{$genre->genre}}
              @endif
              @endforeach
            </td>
             <td>
                @foreach ($auteurs as $auteur)
                  @if ($item->id_auteur == $auteur->id)
              {{$auteur->auteur}}
                  @endif
                @endforeach
            </td>
             <td>
              
              <a href="{{route('show_livre' ,$item->isbn)}}"><button class="btn btn-info">Voir plus</button></a> 
              <a href="{{route('edit_livre' ,$item->isbn)}}"><button class="btn btn-warning">Modifier</button></a> 
              <div class="my-2"></div>
              <a href="{{route('delete_livre' ,$item->isbn)}}"><button class='btn btn-danger'>Supprimer</button></a>
            </td>
         </tr>


   
   @endforeach
   
 </tbody>
</table>



@endsection