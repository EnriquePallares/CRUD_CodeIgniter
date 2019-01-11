<?php
    class Clientes_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function ver() {
            $consulta = $this->db->query("SELECT * FROM clientes;");
            return $consulta->result();
        }
        
        public function agregar($nombre, $apellido, $sexo, $email, $direccion) {
            $consulta = $this->db->query("SELECT email FROM clientes WHERE email LIKE '$email'");
            if($consulta->num_rows()==0) {
                $consulta = $this->db->query(
                    "INSERT INTO clientes VALUES(NULL, '$nombre', '$apellido' , '$sexo',
                    '$email', '$direccion');");

                if($consulta == true) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        public function modificar($id, $modificar="NULL", $nombre="NULL", $apellido="NULL", $sexo="NULL", $email="NULL", $direccion="NULL", $fecha_nacimiento="NULL") {
            if($modificar == "NULL") {
                $consulta = $this->db->query("SELECT * FROM clientes WHERE id=$id");
                return $consulta->result();
            } else {
                $consulta = $this->db->query(
                    "UPDATE clientes SET email='$email', nombre='$nombre', 
                    apellido='$apellido', sexo='$sexo' WHERE id=$id;");

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
    }
?>