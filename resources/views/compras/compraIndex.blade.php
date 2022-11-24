<x-plantilla>

    <div class="container p-3">
        <h1>Listado de Compras</h1>
    </div>

    <div class="container p-3">
        <a href="/compra/create" class="btn btn-primary">Crear Nueva Compra</a>
    </div>

    <div class="container p-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Subtotal</th>
                    <th>IVA</th>
                    <th>Total</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($compras as $compra)
                    <tr>
                        <td>
                            <a class="nav-link link-info" href="/compra/{{ $compra->id }}">
                                {{ $compra->id }}
                            </a>
                        </td>
                        <td>{{ $compra->subtotal }}</td>
                        <td>{{ $compra->iva }}</td>
                        <td>{{ $compra->total }}</td>
                        <td>
                            <a href="/compra/{{ $compra->id }}/edit" class="btn btn-outline-dark">Editar</a>
                        </td>
                        <td>
                            <form action="/compra/{{ $compra->id }}" method="POST">
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