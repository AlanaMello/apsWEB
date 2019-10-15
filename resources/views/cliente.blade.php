<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Formulario</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

</head>
<body>

  <div class="container">
        <br>
        <div class="row">
            <h2>Lista de Clientes</h2>
        </div>
          <div>
            @foreach ($lista as $key => $value)
              <li>{{ $value->nome }} </li>
            @endforeach
          </div>
  </div>
</body>
</html>
