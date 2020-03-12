@extends('layouts/master')
@section('content')



<h2  class="text-centerMethod Illuminate\Database\Eloquent\Collection::save does not exist.">Users</h2>
<div class="text-center py-5">
    <a href="{{route('ajout_user')}}"><button class="btn btn-success text-center">Ajouter</button></a>
 </div>

<table class="table">
 <thead>
   <tr>
     <th scope="col">ID</th>
     <th scope="col">Nom</th>
     <th scope="col">Age</th>
     <th scope="col">Email</th>
     <th scope="col">Action</th>
     
   </tr>
 </thead>
 <tbody>
     @foreach ($users as $item)
         {{-- le dolar se trouve dans le controller le compact --}}
     
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->age}}</td>
             <td>{{$item->email}}</td>
             <td>
              
              <a href="{{route('show_user' ,$item->id)}}"><button class="btn btn-info">Voir plus</button></a> 
              <a href="{{route('edit_user' ,$item->id)}}"><button class="btn btn-warning">Modifier</button></a> 
              <div class="my-2"></div>
              <a href="{{route('delete_user' ,$item->id)}}"><button class='btn btn-danger'>Supprimer</button></a>
            </td>
         </tr>


   
   @endforeach
   
 </tbody>
</table>




@endsection
