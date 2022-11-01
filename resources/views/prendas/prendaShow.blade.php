<x-plantilla titulo="Detalle de la Prenda">

    <div class="container p-3">
        <a href="/prenda" class="btn btn-primary">Listado</a>
    </div>

    <div class="container p-3">
        <h2>{{ $prenda->nombre }}</h2>
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