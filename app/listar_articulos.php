<?php
    session_start();
    require_once('../componentes/adm_head.php');
    require_once('../componentes/adm_top_menu.php');
    require_once('../componentes/adm_left_menu.php');

    require_once('../modelos/articulo.php');

    if (lisset($_SESSION['usu_id'])) {
        header('Location: '.APP_URL.'app/login.php');
    }

    $articulo = new articulo();
    $lista_articulos = $articulo->get_all(

    );
/* 
=============================================
                INICIO ARTICULOS
============================================= 
*/
?>

<div class="contenedor_principal">
    <div>
        <h2>Listado De Elementos</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>TITULO DEL ARTICULO</th>
                <th>OPERACIONES </th>
            </tr>
            <?php foreach($lista_articulos as $item):?>
            <tr>
                <th><?php $item['art_id'] ?></th>
                <th><?php $item['art_titulo']?></th>
                <th>OPERACIONES </th>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php

/* 
=============================================
                FIN ARTICULOS
============================================= 
*/
    require_once('../componentes/adm_footer.php');
?>
