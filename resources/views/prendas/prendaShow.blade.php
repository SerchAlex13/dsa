<x-plantilla titulo="Detalle de la Prenda">

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

                <div class="p-3">
                    <p>{{ $prenda->descripcion }}</p>
                </div>

                <div class="p-3">
                    <h3>Colores</h3>
                    <ul>
                        @foreach ($prenda->colors as $color)
                            <li>{{ $color->nombre }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="p-3">
                    <h3>Tallas disponibles</h3>
                    <ul>
                        @foreach ($prenda->tallas as $talla)
                            <li>{{ $talla->nombre }}</li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
            <div class="col-lg-3 text-center">
                <div class="p-3">
                    <div class="p-3">
                        <a href="/compra/create" class="btn btn-info">Agregar al carrito</a>
                    </div>
                    <div class="p-3">
                        <a href="/prenda" class="btn btn-dark">Regresar</a>
                    </div>
                    
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
            </div>
        </div>
    </div>
    

</x-plantilla>