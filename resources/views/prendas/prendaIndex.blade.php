<x-plantilla>

    <div class="container p-3">
        <h1 class="display-6">Nuestros productos</h1>
    </div>

    {{-- <div class="container p-3">
        <h2>{{ \Auth::user()->name }} - {{ \Auth::user()->email }}</h2>
    </div> --}}

    @can('isAdmin', App\Models\Prenda::class)
    <div class="container p-3">
        <a href="/prenda/create" class="btn btn-dark">Crear Nueva Prenda</a>
    </div>
    @endcan

    <div class="container p-3 mb-5">
        
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($prendas as $prenda)
                <div class="col">
                    <div class="card h-100">
                        @foreach ($prenda->archivos as $archivo)
                            @if ($loop->iteration == 1)
                                <img src="{{ \Storage::url($archivo->ubicacion) }}" class="card-img-top" alt="">
                            @endif
                        @endforeach
                        <div class="card-body">
                            <a href="/prenda/{{ $prenda->id }}" class="nav-link link-dark stretched-link"><h5 class="card-title">{{ $prenda->nombre }}</h5></a>
                            <p class="card-text">{{ $prenda->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</x-plantilla>