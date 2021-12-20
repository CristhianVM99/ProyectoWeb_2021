<div class="container">
        <!-- CONTENIDO CABECERA -->
        <header class="cabecera">
            <div class="logo">
                <img class="menu_log" src="../assets/img/log2.jpg" alt="logo de mi blog">
            </div>
            <div>
                <ul class="top_menu">
                    <li>
                        <i class="fas fa-home"></i>
                        <a href="#">Inicio</a>
                    </li>    
                </ul>
            </div>

            <div class="box_social">
                <div id="user_menu">
                    <div class="lista_barra">
                        <ul>
                            <li><a href="#">Ver Perfil</a></li>
                            <li><a href="#">Actualizar Contraseña</a></li>
                            <li>
                                <form action="<?= APP_URL?>app/autenticar.php" method="POST">
                                    <input type="hidden" name="operacion" value="logout">
                                    <button type="submit">Cerrar Session</button>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
                <a href="#" class="btn" id="btn_user">
                    <i class="fas fa-user"></i>
                    U: <?= $_SESSION['usu_nombres'] ?>
                </a>               
            </div>
        </header>
        <!-- CONTENIDO PRINCIPAL -->
        <div class="contenido">
