<x-plantilla>

    <div class="container p-3">
        <h1 class="display-1">Historial de pedidos</h1>
    </div>

    <div class="container p-3 text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID de pedido</th>
                    <th>Domicilio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($pedidos as $pedido)
                    <tr>

                        <td>{{ $pedido->id }}</td>

                        <td>{{ $pedido->domicilio }}</td>

                        <td>${{ $pedido->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-plantilla>