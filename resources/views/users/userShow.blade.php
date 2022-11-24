<x-plantilla titulo="Detalle de la Prenda">

    <div class="container p-3">
        <h1>Detalle del Usuario</h1>
    </div>
{{-- 
    <div class="container p-3">
        <a href="/prenda" class="btn btn-primary">Listado</a>
    </div> --}}

    <div class="container p-3">
        <h2>{{ $user->name }}</h2>
    </div>

    <div class="container p-3">
        <h3>Información</h3>
        
        <div class="list-group p-3">
            <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID</h5>
                {{-- <small>3 days ago</small> --}}
            </div>
            <p class="mb-1">{{ $user->id }}</p>
            {{-- <small>And some small print.</small> --}}
            </a>

            <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Correo</h5>
                {{-- <small>3 days ago</small> --}}
            </div>
            <p class="mb-1">{{ $user->email }}</p>
            {{-- <small>And some small print.</small> --}}
            </a>

            <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Rol</h5>
                {{-- <small class="text-muted">3 days ago</small> --}}
            </div>
            <p class="mb-1">{{ $user->rol }}</p>
            
            <div class="container p-3">
                <form action="/user/{{ $user->id }}" method="POST" class="">
                    @csrf
                    @method('PATCH')
                    
                    <div class="col-md-2">
                        <label class="form-label">Cambiar rol</label>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-2">
                            <select name="rol" class="form-control selectpicker">
                                <option value="Administrador" {{ $user->rol === 'Administrador' ? 'selected' : '' }}>Administrador</option>
                                <option value="Empleado" {{ $user->rol === 'Empleado' ? 'selected' : '' }}>Empleado</option>
                                <option value="Cliente" {{ $user->rol === 'Cliente' ? 'selected' : '' }}>Cliente</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- <small class="text-muted">And some muted small print.</small> --}}
            </a>
        </div>
    </div>

    

    

</x-plantilla>