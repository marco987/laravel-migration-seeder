@extends('layouts.layout-base')
@section('section')

  <a href="{{ route('create.place') }}">CREATE a new {{ $titolo }}</a>

@foreach ($places as $place)

  <div class="box">
    <p>Nome: {{ $place -> name}}</p>
    <p>Indirizzo: {{ $place -> address}}</p>
    <p>Città: {{ $place -> city}}</p>
    <p>Nazione: {{ $place -> nation}}</p>
    <a href="{{ route('edit.place', $place -> id) }}">UPDATE</a>
    <a href="{{ route('delete.place', $place -> id) }}">DELETE</a>
  </div>

@endforeach

@endsection
