<x-plantilla>

    <div class="container p-3">
        <h1>Listado de Usuarios</h1>
    </div>

    <div class="container p-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->rols as $rol)
                                {{ $rol->nombre }}
                            @endforeach
                        </td>
                        {{-- <td>{{ $rol->nombre }}</td> --}}
                        <td>
                            <a href="/rol/{{ $rol->id }}" class="btn btn-outline-dark">Administrar</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-plantilla>