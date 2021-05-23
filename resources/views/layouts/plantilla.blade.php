
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlePage')</title>
    <!-- favicon -->
    <!-- estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estilospropios.css')}}">
</head>
<body>

 <!-- header -->

 <!-- nav -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">LOGO COPA MUNDIAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-3">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
          <a class="nav-link" href="{{ route('paises.index') }}">Paises</a>
          <a class="nav-link" href="{{ route('clubes.index') }}">Clubes</a>
          {{-- <a class="nav-link" href="{{ route('jugadores.index') }}">Jugadores</a> --}}
        </div>
      </div>
    </div>
  </nav>
  <!-- contenido -->
 <div class='container p-3'>
 @yield('contenido')
</div>
 <!-- footer -->
 <!-- scripts -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>