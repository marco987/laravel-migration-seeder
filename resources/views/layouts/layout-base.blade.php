<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- CSS -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>

    <header>
      <h1>Tabella {{ $titolo }}</h1>
    </header>

    <main>
      @yield('section')
    </main>

    <footer>
      <h4>Created By Me - {{ $titolo }}</h4>
    </footer>

  </body>
</html>
