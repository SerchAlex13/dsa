<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Prenda</title>

    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrapjs.js'])
</head>
<body>
    <h1>Editar Prenda</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/prenda/{{ $prenda->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $prenda->nombre }}">
        <br>
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{ $prenda->tipo }}">
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $prenda->descripcion }}">
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value="{{ $prenda->color }}">
        <br>
        <label for="talla">Talla</label>
        <input type="text" name="talla" id="talla" value="{{ $prenda->talla }}">
        <br>
        <label for="tela">Tela</label>
        <input type="text" name="tela" id="tela" value="{{ $prenda->tela }}">
        <br>
        <label for="inventario">Inventario</label>
        <input type="number" name="inventario" id="inventario" value="{{ $prenda->inventario }}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>