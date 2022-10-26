<x-plantilla titulo="Listado de Prendas">

    {{-- <div class="container p-3">
        <h2>{{ \Auth::user()->name }} - {{ \Auth::user()->email }}</h2>
    </div> --}}

    <div class="container p-3">
        <a href="/prenda/create" class="btn btn-primary">Crear Nueva Prenda</a>
    </div>

    <div class="container p-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Color</th>
                    <th>Tela</th>
                    <th>Precio</th>
                    <th>Inventario</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($prendas as $prenda)
                    <tr>
                        <td>{{ $prenda->id }}</td>
                        <td>{{ $prenda->user->name }}</td>
                        <td>
                            <a class="nav-link link-info" href="/prenda/{{ $prenda->id }}">
                                {{ $prenda->nombre }}
                            </a>
                        </td>
                        <td>{{ $prenda->tipo }}</td>
                        <td>{{ $prenda->descripcion }}</td>
                        <td>{{ $prenda->color }}</td>
                        <td>{{ $prenda->tela }}</td>
                        <td>{{ $prenda->precio }}</td>
                        <td>{{ $prenda->inventario }}</td>
                        <td>
                            <a href="/prenda/{{ $prenda->id }}/edit" class="btn btn-outline-dark">Editar</a>
                        </td>
                        <td>
                            <form action="/prenda/{{ $prenda->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-plantilla>