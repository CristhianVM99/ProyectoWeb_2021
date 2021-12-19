<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Articulo</title>
</head>
<body>
    <h1>Nuevo Articulo</h1>
    <form action="proc_articulos.php" method="post">
        <input type="hidden" name="operacion" value="store">
        <input type="text" name="art_titulo">
        <button type="submit">
            Guardar Datos
        </button>
    </form>
</body>
</html>