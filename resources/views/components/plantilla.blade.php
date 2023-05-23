<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSA Diseños</title>

    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrapjs.js', 'resources/css/style.css'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color:#f5f5f5;">

    <header class="plantilla sticky-top">
        {{-- Menú navbar --}}
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                {{-- Icono --}}
                <a class="navbar-brand" href="/">
                    <img class="logo w-75" src="{{ \Storage::url('public/img/dsa_logo_chico2.png') }}" alt="logo">
                </a>
                {{-- Botón del menú --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- Elementos del menú colapsable --}}
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/prenda">Productos</a>
                        </li>
                        @can('isAdmin', App\Models\Prenda::class)
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pedidos">Pedidos</a>
                        </li>
                        @endcan
                        <li class="nav-item p-2 d-flex flex-fill">
                            <form class="d-flex" role="search">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" size="50">
                                    <button class="btn btn-info" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item dropdown p-2">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ \Auth::user() ? \Auth::user()->name : 'Mi cuenta' }}
                            </a>
                            <ul class="dropdown-menu">
                                @cannot('isLoged', App\Models\Prenda::class)
                                <li><a class="dropdown-item" href="/iniciar_sesion">Iniciar sesión</a></li>
                                <li><a class="dropdown-item" href="/registro_usuario">Regístrate</a></li>
                                
                                @endcan
                                @can('isLoged', App\Models\Prenda::class)
                                <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                                <li><a class="dropdown-item" href="/pedido">Historial de pedidos</a></li>
                                @endcan
                                @can('isAdmin', App\Models\Prenda::class)
                                <li><a class="dropdown-item" href="/user">Administrar usuarios</a></li>
                                @endcan
                                @can('isLoged', App\Models\Prenda::class)
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <div class="d-flex justify-content-center">
                                        <form class="p-2" method="POST" action="/logout">
                                            @csrf
                                            <input class="btn btn-outline-danger" type="submit" value="Cerrar sesión">
                                        </form>
                                    </div>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @cannot('isLoged', App\Models\Prenda::class)
                        <li class="nav-item p-2">
                            <a href="/iniciar_sesion" class="nav-link"><i class="bi bi-cart3"></i> Carrito</a>
                        </li>
                        @endcan
                        @can('isLoged', App\Models\Prenda::class)
                        <li class="nav-item p-2">
                            <a href="/carrito" class="nav-link"><i class="bi bi-cart3"></i> Carrito</a>
                        </li>
                        @endcan
                    </ul>

                    
    {{-- 
                    <form class="p-2" method="POST" action="/registro_usuario">
                        @csrf
                        <input class="btn btn-outline-light" type="submit" value="Regístrate">
                    </form>

                    <form class="p-2" method="POST" action="/logout">
                        @csrf
                        <input class="btn btn-outline-light" type="submit" value="LogOut">
                    </form> --}}


                </div>
            </div>
        </nav>
    </header>

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


    {{ $slot }}

    <footer class="container-fluid">
        <div class="row text-white">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-2 px-5">
                    </div>
                    <div class="col-lg-3 px-5">
                        <h4 class="mb-4">Navega</h4>
                        <a class="nav-link link-primary" href="/prenda">Productos</a>
                    </div>
                    <div class="col-lg-4 px-5">
                        <h4 class="mb-4">Contáctanos</h4>
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill p-1"></i>
                            <p class="p-1">01 2345 6789</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-house-fill p-1"></i>
                            <p class="p-1">Av. Washington #123</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-envelope-fill p-1"></i>
                            <p class="p-1">dsa@ejemplo.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>