<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSA Diseños</title>

    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrapjs.js', 'resources/css/style.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container">
                <img class="logo" src="{{ \Storage::url('public/img/dsa_logo2_darkblue.png') }}" alt="logo">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        {{-- <li class="nav-item mb-3">
                            <a class="nav-link" href="#row-nosotros">Conócenos</a>
                        </li> --}}
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="/prenda">Productos</a>
                        </li>
                        @can('isAdmin', App\Models\Prenda::class)
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="/user">Administrar usuarios</a>
                        </li>
                        @endcan
                        @cannot('isLoged', App\Models\Prenda::class)
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="/iniciar_sesion">Iniciar sesión</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="/registro_usuario">Registrarse</a>
                        </li>
                        @endcan
                        @can('isLoged', App\Models\Prenda::class)
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="/user/profile">{{ \Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item mb-3">
                            <div>
                                <form class="p-1" method="POST" action="/logout">
                                    @csrf
                                    <input class="btn btn-outline-dark" type="submit" value="Cerrar sesión">
                                </form>
                            </div>
                        </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="title">
                <br><h1 class="display-1">DSA Diseños</h1><br>
                <a class="btn btn-custom mt-3" href="/prenda">Ver productos</a>
            </div>
        </div>
    </header>
    <main>
        <div class="row py-5" id="row-habitaciones">
            <div class="container text-center">
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        <h1 class="display-5">Ropa para playa</h1><br>
                    </div>
                </div>
                <div class="row mt-4 mb-4">

                    <div class="col">
                        <div class="card w-100">
                            <img src="{{ \Storage::url('public/img/playera_licra2.jpg') }}" class="card-img-top" alt="playera_licra">
                            <div class="card-body">
                                <a href="/prenda" class="nav-link link-dark stretched-link"><h5 class="card-title">Playeras de licra</h5></a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card w-100">
                            <img src="{{ \Storage::url('public/img/playera_diseno.jpg') }}" class="card-img-top" alt="playera_diseno">
                            <div class="card-body">
                                <a href="/prenda" class="nav-link link-dark stretched-link"><h5 class="card-title">Playeras con diseño</h5></a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card w-100">
                            <img src="{{ \Storage::url('public/img/accesorios.jpg') }}" class="card-img-top" alt="accesorios">
                            <div class="card-body">
                                <a href="/prenda" class="nav-link link-dark stretched-link"><h5 class="card-title">Accesorios y más</h5></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="row py-5" id="row-nosotros">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="w-100" src="{{ \Storage::url('public/img/hotel_tapatio-logos_white.png') }}" alt="hotel_fachada2">
                    </div>
                    <div class="col-md-7 text-center">
                        <br><br><br><br><br>
                        <h1 class="title-color mb-5 display-4">Sobre nosotros</h1>
                        <div class="p-color">
                            <p>Hotel Tapatío es una cadena hotelera de 5 estrellas nacida en la ciudad de Guadalajara que siempre está en busca de mejorar la experiencia de sus huéspedes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>
    <footer>
        <div class="row text-white">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 px-5">
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
                    <div class="col-lg-4 px-5">
                        <h4 class="mb-4">Créditos</h4>
                        <p>
                            <a class="nav-link link-light" href="https://www.freepik.es/foto-gratis/hermosa-costa-fotografia-drone-agua-mar-clara_19075385.htm#from_view=detail_collection">Imagen de rawpixel.com en Freepik</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>