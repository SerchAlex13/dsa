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

    
  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Customers
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

    <h1>Listado de Prendas</h1>

    <a href="/prenda/create">Crear Nueva Prenda</a>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Color</th>
            <th>Talla</th>
            <th>Tela</th>
            <th>Innventario</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($prendas as $prenda)
            <tr>
                <td>
                    <a href="/prenda/{{ $prenda->id }}">
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
                    <a href="/prenda/{{ $prenda->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/prenda/{{ $prenda->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    

</body>
</html>