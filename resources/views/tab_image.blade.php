@extends('layouts/master')
@section('content')




<h2  class="text-center">Images</h2>
<div class="text-center py-5">
    <a href="{{route('ajout_image')}}"><button class="btn btn-success text-center">Ajouter</button></a>
 </div>

<table class="table">
 <thead>
   <tr>
     <th scope="col">ID</th>
     <th scope="col">Image</th>
     <th scope="col">Action</th>
     
   </tr>
 </thead>
 <tbody>
     @foreach ($images as $item)
         {{-- le dolar se trouve dans le controller le compact --}}
     
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->image}}</td>
             
             <td>
              
              <a href="{{route('show_image' ,$item->id)}}"><button class="btn btn-info">Voir plus</button></a> 
              <a href="{{route('edit_image' ,$item->id)}}"><button class="btn btn-warning">Modifier</button></a> 
              <div class="my-2"></div>
              <a href="{{route('delete_image' ,$item->id)}}"><button class='btn btn-danger'>Supprimer</button></a>
            </td>
         </tr>


   
   @endforeach
   
 </tbody>
</table>



@endsection