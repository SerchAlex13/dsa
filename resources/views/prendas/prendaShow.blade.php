<x-plantilla titulo="Detalle de la Prenda">

    <div class="container p-3">
        <h1>Detalle de la Prenda</h1>
    </div>

    <div class="container p-3">
        <a href="/prenda" class="btn btn-primary">Listado</a>
    </div>

    <div class="container p-3">
        <h2>{{ $prenda->nombre }}</h2>
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

    <div class="container p-3 w-auto">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
            <div class="carousel-indicators">
                @foreach ($prenda->archivos as $archivo)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($prenda->archivos as $archivo)
                <div class="carousel-item active">
                    {{-- <li><a href="{{ route('descarga', $archivo) }}">{{ $archivo->nombre_original }}</a></li> --}}
                    <img src="{{ \Storage::url($archivo->ubicacion) }}" class="rounded float-start d-block w-100" alt="">
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


    <div class="container p-3">
        <h3>Colores</h3>
        <ul>
            @foreach ($prenda->colors as $color)
                <li>{{ $color->nombre }}</li>
            @endforeach
        </ul>
    </div>

    <div class="container p-3">
        <h3>Tallas disponibles</h3>
        <ul>
            @foreach ($prenda->tallas as $talla)
                <li>{{ $talla->nombre }}</li>
            @endforeach
        </ul>
    </div>

    <div class="container p-3">
        <a href="/compra/create" class="btn btn-info">Agregar al carrito</a>
    </div>

</x-plantilla>