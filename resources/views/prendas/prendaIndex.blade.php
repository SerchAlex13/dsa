<x-plantilla>

    <div class="container p-3">
        <h1>Listado de Prendas</h1>
    </div>

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
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Tela</th>
                    <th>Precio</th>
                    <th>Inventario</th>
                    <th>Editar</th>
                    @can('administrarUsuarios', App\Models\Prenda::class)
                    <th>Eliminar</th>
                    @endcan
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($prendas as $prenda)
                    <tr>
                        <td>{{ $prenda->id }}</td>
                        <td>
                            <a class="nav-link link-info" href="/prenda/{{ $prenda->id }}">
                                {{ $prenda->nombre }}
                            </a>
                        </td>
                        <td>{{ $prenda->codigo }}</td>
                        <td>{{ $prenda->tipo }}</td>
                        <td>
                            <img src="/imagen/{{ $prenda->imagen }}" alt="" width="60%">
                        </td>
                        <td>{{ $prenda->descripcion }}</td>
                        <td>{{ $prenda->tela }}</td>
                        <td>{{ $prenda->precio }}</td>
                        <td>{{ $prenda->inventario }}</td>
                        <td>
                            <a href="/prenda/{{ $prenda->id }}/edit" class="btn btn-outline-dark">Editar</a>
                        </td>
                        @can('delete', $prenda)
                        <td>
                            <form action="/prenda/{{ $prenda->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="btn btn-outline-danger">
                            </form>
                        </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-plantilla>