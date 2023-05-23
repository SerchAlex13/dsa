<x-plantilla>

    <div class="container p-3">
        <h1>Editar Prenda</h1>
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
    
    <div class="container mb-5">
        <div class="row">
            <div class="col-8">
                <form action="/prenda/{{ $prenda->id }}" method="POST" class="row g-3">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $prenda->nombre }}">
                    </div>
                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" value="{{ $prenda->codigo }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tipo de prenda</label>
                        <select name="tipo" class="form-control selectpicker">
                            <option value="Playera" {{ $prenda->tipo === 'Playera' ? 'selected' : '' }}>Playera</option>
                            <option value="Short" {{ $prenda->tipo === 'Short' ? 'selected' : '' }}>Short</option>
                            <option value="Bolsa" {{ $prenda->tipo === 'Bolsa' ? 'selected' : '' }}>Bolsa</option>
                            <option value="Sombrero" {{ $prenda->tipo === 'Sombrero' ? 'selected' : '' }}>Sombrero</option>
                            <option value="Mandil" {{ $prenda->tipo === 'Mandil' ? 'selected' : '' }}>Mandil</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <!-- <input type="text" class="form-control" name="descripcion" id="descripcion"> -->
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="5" cols="50">{{ $prenda->descripcion }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Colores</label>
                        <select name="colors_id[]" class="form-control selectpicker" multiple data-live-search="true">
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}" {{ array_search($color->id, $prenda->colors->pluck('id')->toArray()) !== false ? 'selected' : '' }}>
                                    {{ $color->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tallas disponibles</label>
                        <select name="tallas_id[]" class="form-control selectpicker" multiple data-live-search="true">
                            @foreach ($tallas as $talla)
                                <option value="{{ $talla->id }}" {{ array_search($talla->id, $prenda->tallas->pluck('id')->toArray()) !== false ? 'selected' : '' }}>
                                    {{ $talla->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tela</label>
                        <select name="tela" class="form-control selectpicker">
                            <option value="Algodón" {{ $prenda->tela === 'Algodón' ? 'selected' : '' }}>Algodón</option>
                            <option value="Poliéster" {{ $prenda->tela === 'Ppliéster' ? 'selected' : '' }}>Poliéster</option>
                            <option value="Licra" {{ $prenda->tela === 'Licra' ? 'selected' : '' }}>Licra</option>
                            <option value="Nylon" {{ $prenda->tela === 'Nylon' ? 'selected' : '' }}>Nylon</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" name="precio" id="precio" value="{{ $prenda->precio }}">
                    </div>
                    <div class="d-flex">
                        <div class="col-md-2 p-3">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                        <div class="col-md-2 p-3">
                            <a href="/prenda" class="btn btn-info">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>

</x-plantilla>