<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrapjs.js'])
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DSA Diseños</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Listado de Prendas</h1>
    </div>

    <div class="container">
        <a href="/prenda/create" class="btn btn-primary">Crear Nueva Prenda</a>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Color</th>
                    <th>Talla</th>
                    <th>Tela</th>
                    <th>Inventario</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($prendas as $prenda)
                    <tr>
                        <td>
                            <a class="nav-link" href="/prenda/{{ $prenda->id }}">
                                {{ $prenda->nombre }}
                            </a>
                        </td>
                        <td>{{ $prenda->tipo }}</td> 
                        <td>{{ $prenda->descripcion }}</td> 
                        <td>{{ $prenda->color }}</td> 
                        <td>{{ $prenda->talla }}</td> 
                        <td>{{ $prenda->tela }}</td>
                        <td>{{ $prenda->inventario }}</td> 
                        <td>
                            <a href="/prenda/{{ $prenda->id }}/edit" class="btn btn-outline-dark">Editar</a>
                        </td>
                        <td>
                            <form action="/prenda/{{ $prenda->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="btn btn-outline-dark">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

</body>
</html>