<x-plantilla>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!--<div class="container p-3">
        <p>
            <h3>Fotos</h3>
            <ul>
                @foreach ($prenda->archivos as $archivo)
                    {{-- <li><a href="{{ route('descarga', $archivo) }}">{{ $archivo->nombre_original }}</a></li> --}}
                    <img src="{{ \Storage::url($archivo->ubicacion) }}" alt="">
                @endforeach
            </ul>
        </p>
    </div>-->
    <form action="/carrito" method="POST">
        @csrf
        <div class="container">
            <div class="row mt-4">
        {{-- <div class="container d-flex justify-content-center"> --}}
                <div class="col-lg-4 p-3 w-50 mb-5">
                    <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            @foreach ($prenda->archivos as $archivo)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->iteration == 1 ? 'active' : '' }}" aria-current="{{ $loop->iteration == 1 ? 'true' : 'false' }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($prenda->archivos as $archivo)
                                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                    <img src="{{ \Storage::url($archivo->ubicacion) }}" class="rounded d-block w-100" alt="">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                
                    
                <div class="col-lg-3">
                    <div class="p-3">
                        <h1>{{ $prenda->nombre }}</h1>
                    </div>

                    <div class="p-2">
                        <p>{{ $prenda->descripcion }}</p>
                    </div>

                    <div class="p-2">
                        <p>Tela: {{ $prenda->tela }}</p>
                    </div>

                    <div class="p-2">
                        <label class="form-label">Color</label>
                        <select name="color" class="form-control selectpicker">
                            @foreach ($prenda->colors as $color)
                                <option value="{{ $color->nombre }}">
                                    {{ $color->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="p-2">
                        <label class="form-label">Talla</label>
                        <select name="talla" class="form-control selectpicker">
                            @foreach ($prenda->tallas as $talla)
                                <option value="{{ $talla->nombre }}">
                                    {{ $talla->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="p-2">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" step="1" class="form-control" name="cantidad" id="cantidad" required>
                    </div>
                    <div class="p-2">
                        <label for="prenda_id" class="form-label">ID de producto</label>
                        <input type="text" class="form-control" name="prenda_id" id="prenda_id" value="{{ $prenda->id }}" readonly>
                    </div>
                </div>

                <div class="col-lg-3 text-center">
                    <div class="p-3">
                        <div class="shadow-sm p-3 mb-5 bg-body rounded">
                            <div class="">
                                <h1>${{ $prenda->precio }} c/u</h1>
                            </div>
                            
                            <div class="p-2 mb-5">
                                <label for="total" class="form-label">Total a pagar</label>
                                <input type="text" class="form-control" name="total" id="total" readonly>
                                
                            </div>
                            <div class="p-3">
                                <button type="submit" class="btn btn-info"><i class="bi bi-cart3"></i> Agregar al carrito</button>
                            </div>
                        </div>
                        <div class="p-3">
                            <a href="/prenda" class="btn btn-dark">Regresar</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </form>

    <div class="container d-flex justify-content-center mb-5">
        @can('update', $prenda)
        <div class="p-3">
            <a href="/prenda/{{ $prenda->id }}/edit" class="btn btn-warning">Editar</a>
        </div>
        @endcan
        
        @can('delete', $prenda)
        <div class="p-3">
            <form action="/prenda/{{ $prenda->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar" class="btn btn-danger">
            </form>
        </div>
        @endcan
    </div>

    <script>
        cantidad.oninput = function() {
            total.value = cantidad.value * {{ $prenda->precio }};
        };
    </script>

</x-plantilla>