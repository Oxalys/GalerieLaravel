@extends('layouts/master')
@section('content')

@foreach ($avatars as $item)
<div class="border border container bg-secondary text-light my-5">
<h2 class="text-center py-3 text-uppercase">Fiche descriptive de l'avatar {{$item->name}}</h2>
<h2 class="py-3">Détails :</h2>

<h4>Nom :</h4>
<p>{{$item->name}}</p>
<hr>
<h4>Avatar:</h4>
<img src="{{$item->avatar}}" alt="">
<br>

</div>

@endforeach





@endsection
