<x-plantilla>

    <div class="container p-3">
        <h1>Listado de Carritos</h1>
    </div>

    <div class="container p-3">
        <a href="/carrito/create" class="btn btn-primary">Crear Nuevo Carrito</a>
    </div>

    <div class="container p-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID de prenda</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($carritos as $carrito)
                    <tr>
                        <td>
                            <a class="nav-link link-info" href="/carrito/{{ $carrito->id }}">
                                {{ $carrito->id }}
                            </a>
                        </td>
                        <td>{{ $carrito->prenda_id }}</td>
                        <td>
                            <a href="/carrito/{{ $carrito->id }}/edit" class="btn btn-outline-dark">Editar</a>
                        </td>
                        <td>
                            <form action="/carrito/{{ $carrito->id }}" method="POST">
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