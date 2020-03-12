@extends('layouts/master')
@section('content')




<h2  class="text-center my-4">Avatars</h2>
<div class="text-center py-5">
    <a href="{{route('ajout_avatar')}}"><button class="btn btn-success text-center">Ajouter</button></a>
 </div>

<table class="table">
 <thead>
   <tr>
     <th scope="col-3">ID</th>
     <th scope="col-3">Nom</th>
     <th scope="col-3">Avatar</th>
     <th scope="col-3">Action</th>
     
   </tr>
 </thead>
 <tbody>
     @foreach ($avatars as $item)
         {{-- le dolar se trouve dans le controller le compact --}}
     
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td><img  class="w-25"src="{{asset("storage/".$item->avatar)}}" alt=""></td>
             
             
             <td>
              
              <a href="{{route('show_avatar' ,$item->id)}}"><button class="btn btn-info">Voir plus</button></a> 
              <a href="{{route('edit_avatar' ,$item->id)}}"><button class="btn btn-warning">Modifier</button></a> 
              <div class="my-2"></div>
              <a href="{{route('delete_avatar' ,$item->id)}}"><button class='btn btn-danger'>Supprimer</button></a>
            </td>
         </tr>


   
   @endforeach
   
 </tbody>
</table>



@endsection