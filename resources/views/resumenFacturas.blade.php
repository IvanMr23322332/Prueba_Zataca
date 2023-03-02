<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="antialiased">
        <h2>Numero de impagos:          <b>{{$fields}}</b></h2>
        <br>
        <h2>Total de impagos:           <b>{{$total}}€</b></h2>

    </body>
</html>
