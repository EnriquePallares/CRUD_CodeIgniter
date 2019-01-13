<?php
    class Clientes_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            date_default_timezone_set('America/Bogota');
        }

        public function ver() {
            $consulta = $this->db->query("SELECT * FROM clientes ORDER BY nombre;");
            return $consulta->result();
        }
        
        public function agregar($nombre, $apellido, $sexo, $email, $direccion) {
            $consulta = $this->db->query("SELECT email FROM clientes WHERE email LIKE '$email'");
            if($consulta->num_rows()==0) {
                $fecha_registro = date("Y/m/d h:i:s");
                $consulta = $this->db->query(
                    "INSERT INTO clientes VALUES(NULL, '$nombre', '$apellido' , '$sexo',
                    '$email', '$direccion', '$fecha_registro');");

                if($consulta == true) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        public function modificar($id, $modificar="NULL", $nombre="NULL", $apellido="NULL", $sexo="NULL", $email="NULL", $direccion="NULL") {
            if($modificar == "NULL") {
                $consulta = $this->db->query("SELECT * FROM clientes WHERE id=$id");
                return $consulta->result();
            } else {
                $consulta = $this->db->query(
                    "UPDATE clientes SET email='$email', nombre='$nombre', 
                    apellido='$apellido', sexo='$sexo', direccion='$direccion' WHERE id=$id;");

                if($consulta == true){
                    return true;
                } else {
                    return false;
                }
            }
        }

        public function eliminar($id) {
            $consulta = $this->db->query("DELETE FROM clientes WHERE id=$id");
            if($consulta == true) {
                return true;
            } else {
                return false;
            }
        }

        public function verDetalle($id) {
            $consulta = $this->db->query("SELECT * FROM clientes WHERE id=$id;");
            return $consulta->result();
        }
    }
?>