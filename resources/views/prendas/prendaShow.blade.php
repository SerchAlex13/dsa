<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>

    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrapjs.js'])
</head>
<body>
    <h1>Detalle de la Prenda</h1>

    <a href="/prenda">Listado</a>
    
    <h2>{{ $prenda->nombre }}</h2>
</body>
</html>