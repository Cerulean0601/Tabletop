<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/nes.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
      <div class="nes-field">
        <label for="name">Your name</label>
        <input type="text" id="name" class="nes-input">
        <button type="button" class="nes-btn is-primary">Connect</button>
      </div>
  </body>
  <script type="text/javascript">
    Echo.channel('user')
    .listen('UserLogin', (e) => {
        console.log(e);
    });
  </script>
</html>
