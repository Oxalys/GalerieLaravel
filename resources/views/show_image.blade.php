@extends('layouts/master')
@section('content')

@foreach ($images as $item)
<div class="border border-secondary container my-5">
<h2 class="text-center py-3 text-uppercase">Fiche descriptive de l'image</h2>
<h2 class="py-3">Détails :</h2>

<h4>Image:</h4>
<img  src="{{asset("storage/".$item->image)}}" alt="">
<hr>

</div>

@endforeach





@endsection
