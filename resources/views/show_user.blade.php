@extends('layouts/master')
@section('content')

@foreach ($users as $item)
<div class="border border-secondary container bg-secondary text-light my-5">
<h2 class="text-center py-3 text-uppercase">Fiche descriptive de {{$item->name}}</h2>
<h2 class="py-3">Détails :</h2>

<h4>Nom :</h4>
<p>{{$item->name}}</p>
<hr>
<h4>Age:</h4>
<p>{{$item->age}}</p>
<hr>
<h4>Email</h4>
<p>{{$item->email}}</p>
<hr>
<h4>Avatar:</h4>
<p>
    {{-- @foreach ($avatars as $avatar)
    @if ($item->id_avatar == $avatar->id)
    {{$avatar->avatar}}
    @endif
    @endforeach --}}
</p>
<hr>
</div>

@endforeach





@endsection
