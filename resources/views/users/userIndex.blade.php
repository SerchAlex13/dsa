<x-plantilla>

    <div class="container p-3">
        <h1>Listado de Usuarios</h1>
    </div>

    <div class="container p-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <a class="nav-link link-info" href="/user/{{ $user->id }}">
                                {{ $user->name }}
                            </a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rol }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-plantilla>