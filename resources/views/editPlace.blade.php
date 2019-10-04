@extends('layouts.layout-base')
@section('section')

  <a href="{{ route('index.place') }}">BACK</a>

  <div class="box">
    <form method="post" action="{{ route('update.place', $place -> id) }}">
      @csrf
      @method('POST')
      <div class="form-row">
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{ $place -> name }}">
      </div>
      <div class="form-row">
        <label for="address">Indirizzo</label>
        <input type="text" name="address" value="{{ $place -> address }}">
      </div>
      <div class="form-row">
        <label for="city">Città</label>
        <input type="text" name="city" value="{{ $place -> city }}">
      </div>
      <div class="form-row">
        <label for="nation">Nazione</label>
        <input type="text" name="nation" value="{{ $place -> nation }}">
      </div>
      <button type="submit">UPDATE</button>
    </form>
  </div>


@endsection
