<x-plantilla titulo="Detalle de la Prenda">

    <div class="container p-3">
        <h1>Detalle del Rol</h1>
    </div>
{{-- 
    <div class="container p-3">
        <a href="/prenda" class="btn btn-primary">Listado</a>
    </div> --}}

    <div class="container p-3">
        <h2>{{ $rol->nombre }}</h2>
    </div>

    <div class="container p-3">
        <h3>Usuarios</h3>
        <ul>
            @foreach ($rol->users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>

</x-plantilla>