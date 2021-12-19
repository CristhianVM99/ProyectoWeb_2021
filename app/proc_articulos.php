<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $op = $_POST['operacion'];
    switch ($op) {
        case 'store':
            echo "<h1>Ejecutando Instruccion de STORE</h1>";
            break;
        case 'update':
            echo "<h1>Ejecutando Instruccion de UPDATE</h1>";
            break;
        case 'delete':
            echo "<h1>Ejecutando Instruccion de DELETE</h1>";
            break;
        default:
            // header("HTTP/1.0 404 Not Found")
            echo "NO existe esta operacion";
    }
}else{
    // header("HTTP/1.0 404 Not Found")
    echo "Esta Operacion No esta Permitida";
}



?>
