<x-plantilla>
    
    <div class="container p-3">
        <h1>Crear Compra</h1>
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
                <form action="/compra" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-8">
                        <label for="subtotal" class="form-label">Subtotal</label>
                        <input type="number" step="0.01" class="form-control" name="subtotal" id="subtotal">
                    </div>
                    <div class="col-md-8">
                        <label for="iva" class="form-label">IVA</label>
                        <input type="number" step="0.01" class="form-control" name="iva" id="iva">
                    </div>
                    <div class="col-md-8">
                        <label for="total" class="form-label">Total</label>
                        <input type="number" step="0.01" class="form-control" name="total" id="total">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-2 p-3">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                        <div class="col-md-2 p-3">
                            <a href="/compra" class="btn btn-info">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>

</x-plantilla>