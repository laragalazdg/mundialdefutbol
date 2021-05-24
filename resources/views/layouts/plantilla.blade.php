<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlePage')</title>
    <!-- favicon -->
    <!-- estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilospropios.css') }}">
</head>

<body>
    <!-- header -->
    <div class='row'>
        <div class=' col-3 '>
            <div class=' col menu_lateral m-4 rounded p-2'>
                <!-- nav -->
                <nav class="nav navbar  flex-column sticky-top navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="../../img/logocopa.png" alt=""
                            width='100'></a>
                    <h1 class='text-light'>Bienvenid@</h1>
                    <div class='btn-group-vertical m-3'>
                        <a href="{{ route('paises.index') }}" class="btn btn-light m-1">Paises Participantes</a>
                        <a href="{{ route('clubes.index') }}" class="btn btn-light m-1">Clubes Participantes</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>

            </div>
        </div>


        <!-- contenido -->
        <div class='col-9'>
            <div class='col  contenido  mt-4 p-2'>
                <div class='container'>
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
