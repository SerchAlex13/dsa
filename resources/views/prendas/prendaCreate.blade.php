<x-plantilla titulo="Crear Prenda">
    
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
            <div class="col-8">
                <form action="/prenda" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="tipo" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" name="tipo" id="tipo" value="{{ old('tipo')}}">
                    </div>
                    <div class="col-md-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <!-- <input type="text" class="form-control" name="descripcion" id="descripcion"> -->
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="5" cols="50" value="{{ old('descripcion')}}"></textarea>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Colores</label>
                        <select name="colors_id[]" class="form-control selectpicker" multiple data-live-search="true">
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tallas disponibles</label>
                        <select name="tallas_id[]" class="form-control selectpicker" multiple data-live-search="true">
                            @foreach ($tallas as $talla)
                                <option value="{{ $talla->id }}">{{ $talla->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="tela" class="form-label">Tela</label>
                        <input type="text" class="form-control" name="tela" id="tela" value="{{ old('tela')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" name="precio" id="precio" value="{{ old('precio')}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inventario" class="form-label">Inventario</label>
                        <input type="number" class="form-control" name="inventario" id="inventario" value="{{ old('inventario')}}">
                    </div>
                    <div class="col-md-2 p-3">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                    <div class="col-md-2 p-3">
                        <a href="/prenda" class="btn btn-info">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>    
    </div>


</x-plantilla>