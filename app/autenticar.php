<?php
    require_once('../modelos/usuario.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $op = $_POST['operacion'];
        switch ($op) {
            case "login":
                $usuario = new usuario();
                $usr = $_POST['usr'];
                $pwd = $_POST['pwd'];

                $item = $usuario->get_por_usuario($usr);

                if($item !== null){
                    // echo "el usuario existe";
                    // nome responde y eso que el password es igual al de la base de datos nome deja iniciar session 
                    if (password_verify($pwd,$item['usu_password']) ){
                        echo "Autenticado Correctamente";
                        session_start();
                        $_SESSION['usu_id'] = $item['usu_id'];
                        $_SESSION['usu_nombres'] = $item['usu_nombres'];
                        $_SESSION['usu_primer_apellido'] = $item['usu_primer_apellido'];
                        header('Location: '.APP_URL.'app/listar_articulos.php');
                    }else{
                        echo "El passsword no es correcto";
                        echo $item['usu_password'];
                        echo $pwd;
                    }
                }else{
                    echo "el usuario no existe";
                }

                break;
            case "logout":
                if (ini_get("session.use_cookies")) {
                    $params = session_get_cookie_params();
                    setcookie(session_name(), '', time()-42000,$params["path"], $params["domain"], $params['secure'], $params['httponly']);
                }
                session_destroy();
                header('Location: '.APP_URL);
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