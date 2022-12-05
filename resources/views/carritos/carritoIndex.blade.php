<x-plantilla>

    <div class="container p-3 d-flex justify-content-between">
        <div>
            <h1 class="display-6">Carrito</h1>
        </div>

        @php
            $total = 0;   
        @endphp

        @foreach ($carritos as $carrito)
            @php
                $total = $total + $carrito->total;
            @endphp
        @endforeach
        <div>
            <h1 class="display-6">Total a pagar: ${{ $total }}</h1>
        </div>

        {{-- <div class="p-2">
            <a href="#" class="btn btn-success"><i class="bi bi-basket2 p-2"></i>Realizar pedido</a>
        </div> --}}




        <!-- Button trigger modal -->
        <div class="col-md-2 p-3">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-basket2 p-2"></i>Realizar pedido
            </button>
        </div>
    
        <!-- Modal -->
        <form action="/pedido" method="POST" class="row g-3">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pedido</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mx-auto col-md-8">
                                <label id="icon" for="domicilio"><i class="bi bi-house"></i></label>
                                <label for="domicilio" class="form-label">Domicilio</label>
                                <input type="text" class="form-control" name="domicilio" id="domicilio" required>
                            </div>
                            <div class="mx-auto col-md-8">
                                <label id="icon" for="numero"><i class="bi bi-credit-card-2-front"></i></label>
                                <label for="numero" class="form-label">Número de tarjeta</label>
                                <input type="text" class="form-control" name="numero" id="numero" required>
                            </div>
                            <div class="mx-auto col-md-8">
                                <label id="icon" for="cvv"><i class="bi bi-credit-card"></i></label>
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="password" class="form-control" name="cvv" id="cvv" required>
                            </div>
                            <div class="mx-auto col-md-8">
                                <label id="icon" for="fecha"><i class="bi bi-calendar-date"></i></label>
                                <label for="fecha" class="form-label">Fecha vencimiento</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" required>
                            </div>
                            <div class="mx-auto col-md-8">
                                <label id="icon" for="nombre"><i class="bi bi-person-square"></i></label>
                                <label for="nombre" class="form-label">Nombre del titular</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                            <div class="container w-75 d-flex justify-content-end p-3">
                                
                                
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                                <div class="input-group w-50">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" name="total" id="total" readonly value="{{ $total }}">
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-info">Pagar</button>
                                </div>
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>



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
                            <div class="d-flex justify-content-between">
                                <form action="/carrito/{{ $carrito->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Quitar del carrito" class="btn btn-outline-danger">
                                </form>
                                <h5 class="card-title p-1">Subtotal: ${{ $carrito->total }}</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    

</x-plantilla>