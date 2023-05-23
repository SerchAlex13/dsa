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
                    <th>Fecha</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($pedidos as $pedido)
                    <tr>

                        <td>{{ $pedido->id }}</td>

                        <td>{{ $pedido->domicilio }}</td>

                        <td>${{ $pedido->total }}</td>

                        <td>{{ $pedido->created_at }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container p-3 mb-5">
        @foreach ($carritos as $carrito)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        @foreach ($carrito->prenda->archivos as $archivo)
                            @if ($loop->iteration == 1)
                                <img src="{{ \Storage::url($archivo->ubicacion) }}" class="img-fluid rounded-start" alt="">
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $carrito->prenda->nombre }}</h5>
                            
                            <p class="card-text">
                                Color: {{ $carrito->color }} <br>
                                Talla: {{ $carrito->talla }} <br>
                                Cantidad: {{ $carrito->cantidad }} <br>
                            </p>
                            
                            <h5 class="card-title">Subtotal: ${{ $carrito->total }}</h5>
                                
                            <h5 class="card-title">Estado: {{ $carrito->estado }}</h5>

                            @can('isAdmin', App\Models\Prenda::class)
                            <div class="container p-3">
                                <form action="/carrito/{{ $carrito->id }}" method="POST" class="">
                                    @csrf
                                    @method('PATCH')
                                    
                                    <div class="">
                                        <label class="form-label">Cambiar estado</label>
                                    </div>
                                    <div class="row g-3">
                                        <div class="">
                                            <select name="estado" class="form-control selectpicker">
                                                <option value="En el carrito" {{ $carrito->estado === 'En el carrito' ? 'selected' : '' }}>En el carrito</option>
                                                <option value="Pedido" {{ $carrito->estado === 'Pedido' ? 'selected' : '' }}>Pedido</option>
                                                <option value="Pedido tomado" {{ $carrito->estado === 'Pedido tomado' ? 'selected' : '' }}>Pedido tomado</option>
                                                <option value="Enviado" {{ $carrito->estado === 'Enviado' ? 'selected' : '' }}>Enviado</option>
                                                <option value="Entregado" {{ $carrito->estado === 'Entregado' ? 'selected' : '' }}>Entregado</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-dark">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endcan

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-plantilla>