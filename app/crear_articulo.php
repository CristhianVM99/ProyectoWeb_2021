<?php
    require_once('../componentes/adm_head.php');
    require_once('../componentes/adm_top_menu.php');
    require_once('../componentes/adm_left_menu.php');
/* 
=============================================
                INICIO ARTICULOS
============================================= 
*/
?>

<div class="contenedor_principal">
    <div>
        <h2>Nuevo Articulo</h2>
        <form action="<?php echo APP_URL?>app/proc_articulos.php" method="POST">
            <input type="hidden" name="operacion" value="store">
            <div class="grid_1">
                <div class="form_item">
                    <label for="">Titulo Articulo</label>
                    <input type="text" name="art_titulo" placeholder="defina el titulo del articulo">
                </div>
                <div class="form_item">
                    <label for="">Resumen del Articulo</label>
                    <textarea type="text" name="art_resumen" placeholder="defina el resumen del articulo"></textarea>
                </div>
                <div class="form_item">
                    <label for="">Contenido Articulo</label>
                    <textarea rows="10" type="text" name="art_detalle" placeholder="defina el contenido del articulo"></textarea>
                </div>
            </div>
            <div class="grid_3">
                <div class="form_item">
                    <label for="">Categoria</label>
                    <select name="cat_id" id="cat_id">
                        <option value="">Seleccion una opcion</option>
                        <option value="1">A</option>
                    </select>
                </div>
                <div class="form_item">
                    <label for="">Imagen</label>
                    <input type="file" name="art_foto" id="">
                </div>
            </div>
            <div class="grid_3">
                <div class="form_item">
                    <button class="btn" type="submit">
                        Guardar Datos
                    </button>
                </div>
            </div>
        </form>
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
