<x-plantilla>

    <div class="container p-3">
        <h1 class="display-6">Carrito</h1>
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
                                    <input type="submit" value="Borrar" class="btn btn-outline-danger">
                                </form>
                                <h5 class="card-title p-1">Total: ${{ $carrito->total }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</x-plantilla>