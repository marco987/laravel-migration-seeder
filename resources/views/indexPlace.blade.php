@extends('layouts.layout-base')
@section('section')

@foreach ($places as $place)

  <div class="box">
    <p>Nome: {{ $place -> name}}</p>
    <p>Indirizzo: {{ $place -> address}}</p>
    <p>Città: {{ $place -> city}}</p>
    <p>Nazione: {{ $place -> nation}}</p>
  </div>

@endforeach

@endsection
