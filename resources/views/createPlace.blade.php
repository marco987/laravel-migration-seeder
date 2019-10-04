@extends('layouts.layout-base')
@section('section')

  <a href="{{ route('index.place') }}">BACK</a>

  <div class="box">
    <form method="post" action="{{ route('store.place') }}">
      @csrf
      @method('POST')
      <div class="form-row">
        <label for="name">Nome</label>
        <input type="text" name="name" value="">
      </div>
      <div class="form-row">
        <label for="address">Indirizzo</label>
        <input type="text" name="address" value="">
      </div>
      <div class="form-row">
        <label for="city">Città</label>
        <input type="text" name="city" value="">
      </div>
      <div class="form-row">
        <label for="nation">Nazione</label>
        <input type="text" name="nation" value="">
      </div>
      <button type="submit">SAVE</button>
    </form>
  </div>


@endsection
