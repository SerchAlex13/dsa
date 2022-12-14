<x-plantilla>

    <div class="container p-3">
        <h1>Crear Carrito</h1>
    </div>
    
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
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/carrito" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="prenda_id" class="form-label">ID de la prenda</label>
                        <input type="number" class="form-control" name="prenda_id" id="prenda_id">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-2 p-3">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                        <div class="col-md-2 p-3">
                            <a href="/carrito" class="btn btn-info">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>

</x-plantilla>