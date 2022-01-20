<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/nes.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
      <div class="nes-field">
        <label for="name">Your name</label>
        <input type="text" id="name" class="nes-input">
        <button type="button" class="nes-btn is-primary">Connect</button>
      </div>
  </body>
  <script type="text/javascript">
    const socket = io("http://127.0.0.1");
    var btnLogin = function(){
      $.ajax({
          url: '',
          type: 'post',
          data: {},
          success: function (data) {
            data
          }
        });
    }
  </script>
</html>
