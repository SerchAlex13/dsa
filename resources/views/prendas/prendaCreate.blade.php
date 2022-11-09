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
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" name="codigo" id="codigo">
                    </div>
                    <div class="col-md-6">
                        <label for="tipo" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" name="tipo" id="tipo">
                    </div>
                    <div class="col-md-6">
                        <img id="imagenSeleccionada" style="max-height: 300px;">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Subir imagen</label>
                        <div>
                            <label for="">
                                <div>
                                    <p>Seleccione la imagen</p>
                                </div>
                                <input name="imagen" id="imagen" type="file">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <!-- <input type="text" class="form-control" name="descripcion" id="descripcion"> -->
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="5" cols="50"></textarea>
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
                        <input type="text" class="form-control" name="tela" id="tela">
                    </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" name="precio" id="precio">
                    </div>
                    <div class="col-md-6">
                        <label for="inventario" class="form-label">Inventario</label>
                        <input type="number" class="form-control" name="inventario" id="inventario">
                    </div>
                    <div class="col-md-2 p-3">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                    <div class="col-md-2 p-3">
                        <a href="/prenda" class="btn btn-info">Cancelar</a>
                    </div>

{{-- 

                    <input type="file" id="myfile" style="display:none;" onchange="js_changed_file();"  />

                    <a href="#" onclick="$('#myfile').trigger('click');return false;">
                    <b class='fa fa-folder fa-lg'></b> Seleccionar archivo
                    </a>

                    <p id="display_filename" style="display:none; word-break: break-all;margin:0.3em;padding:0.5em 1em;"></p>

                     --}}

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="announce"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="card" style="width: 25rem;">
                                        <img class="card-img-top" src="https://via.placeholder.com/150">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="image">Upload image</label>
                                                <input type="file" class="form-control-file mt-2" name="image" id="image">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>    
    </div>


</x-plantilla>