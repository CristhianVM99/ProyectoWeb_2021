<?php
    require_once('modelo.php');
    // modelo categoria
    class cateroria extends Modelo{
        private $id;
        private $nombre_tabla;

        /*
        ============================================
        CONSTRUCTOR
        descripcion: Conecta A la Base De Datos
        ============================================
        */
        
        public function __construct(){
            parent::__construct(); //conexion a la base de datos
            $this->id = 'pro_id';
            $this->nombre_tabla = 'proyecto';
        }

        /*
        ====================================================
        Obtener todos los registros de la tabla categoria
        ====================================================
        */

        public function get_all(){
            $consulta = "SELECT * FROM proyecto";
            $resultado = $this->db->query($consulta);
            if(!$resultado){
                echo "Error al listar lo datos de la tabla";
            }else{
                return $resultado->fetch_all(MYSQLI_ASSOC);//obj array - asociativo
                $resultado->close();
                $this->db->close();
            }
        }

        /*
        ===========================================================================
        Obtener 1 registro de la tabla categoria cuyo ID se envia por parametro
        ===========================================================================
        */

        public function get($id){
            $consulta = "SELECT * FROM $this->nombre_tabla where $this->id = ".$id;
            $resultado = $this->db->query($consulta);
            if(!$resultado){
                echo "Error al obtener el elemento con ID";
            }else{
                return $resultado->fetch_assoc();//obj array - asociativo un registro
                $resultado->close();
                $this->db->close();
            }
        }

        /*
        ===========================================================================
        Guardar 1 registro en BD
        ===========================================================================
        */
        
        public function store($data){//array[]
            $consulta = "INSERT INTO $this->nombre_tabla (cat_nombre) values ('".$data['cat_nombre']."');";
            $resultado = $this->db->query($consulta);
            if(!$resultado){
                echo "Error al registrar datos";
            }else{
                return $resultado;
                $resultado->close();
                $this->db->close();
            }
        }

        /*
        ===========================================================================
        Actualizar 1 registro en BD
        ===========================================================================
        */
        
        public function update($id, $data){//array[]
            $consulta = "UPDATE $this->nombre_tabla SET cat_nombre = '".$data['cat_nombre']."' WHERE $this->id =".$id;
            $resultado = $this->db->query($consulta);
            if(!$resultado){
                echo "Error al actualizar datos datos";
            }else{
                return $resultado;
                $resultado->close();
                $this->db->close();
            }
        }

        /*        
        ===============================
        Eliminar 1 Registro en BD
        ===============================
        */
        
        public function delete($id){//array[]
            $consulta = "DELETE FROM $this->nombre_tabla WHERE $this->id =".$id;
            $resultado = $this->db->query($consulta);
            if(!$resultado){
                echo "Error al actualizar datos datos";
            }else{
                return $resultado;
                $resultado->close();
                $this->db->close();
            }
        }
    }


?>