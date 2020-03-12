@extends('layouts/master')
@section('content')

@foreach ($categories as $item)
<div class="border border-secondary container bg-secondary text-light my-5">
<h2 class="text-center py-3 text-uppercase">Fiche descriptive de la categorie</h2>
<h2 class="py-3">Détails :</h2>

<h4>Categorie:</h4>
<p>{{$item->categorie}}</p>
<hr>

</div>

@endforeach





@endsection
