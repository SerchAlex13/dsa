<x-plantilla>
    
    <div class="container p-3">
        <h1>Crear Prenda</h1>
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
                <form action="/prenda" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-md-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre')}}">
                    </div>
                    <div class="col-md-12">
                        <label for="archivo" class="form-label">Foto</label>
                        {{-- <input type="file" class="form-control" name="archivo"> --}}
                        <input type="file" class="form-control" name="archivos[]" multiple required>
                    </div>
                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo')}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tipo de prenda</label>
                        <select name="tipo" class="form-control selectpicker">
                            <option value="Playera">Playera</option>
                            <option value="Short">Short</option>
                            <option value="Bolsa">Bolsa</option>
                            <option value="Sombrero">Sombrero</option>
                            <option value="Mandil">Mandil</option>
                        </select>
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
                        <label class="form-label">Tela</label>
                        <select name="tela" class="form-control selectpicker">
                            <option value="Algodón">Algodón</option>
                            <option value="Poliéster">Poliéster</option>
                            <option value="Licra">Licra</option>
                            <option value="Nylon">Nylon</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" name="precio" id="precio" value="{{ old('precio')}}">
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