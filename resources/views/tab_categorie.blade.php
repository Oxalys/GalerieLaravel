@extends('layouts/master')
@section('content')




<h2  class="text-center my-4">Catégories</h2>
<div class="text-center py-5">
    <a href="{{route('ajout_categorie')}}"><button class="btn btn-success text-center">Ajouter</button></a>
 </div>

<table class="table">
 <thead>
   <tr>
     <th scope="col">ID</th>
     <th scope="col">Categorie</th>
     <th scope="col">Action</th>
     
   </tr>
 </thead>
 <tbody>
     @foreach ($categories as $item)
         {{-- le dolar se trouve dans le controller le compact --}}
     
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->categorie}}</td>
             
             <td>
              
              <a href="{{route('show_categorie' ,$item->id)}}"><button class="btn btn-info">Voir plus</button></a> 
              <a href="{{route('edit_categorie' ,$item->id)}}"><button class="btn btn-warning">Modifier</button></a> 
              <a href="{{route('delete_categorie' ,$item->id)}}"><button class='btn btn-danger'>Supprimer</button></a>
            </td>
         </tr>


   
   @endforeach
   
 </tbody>
</table>



@endsection