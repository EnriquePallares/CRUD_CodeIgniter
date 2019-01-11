<?php
    class Clientes_controller extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->helper("url"); 
            $this->load->model("Clientes_model");
            $this->load->library("session");
        }

        public function index() {
            $clientes["ver"] = $this->Clientes_model->ver();
            $this->load->view("clientes_view", $clientes);
        }

        public function agregar() {
            if($this->input->post("submit")) {
                $agregar = $this->Clientes_model->agregar(
                            $this->input->post("nombre"),
                            $this->input->post("apellido"),
                            $this->input->post("sexo"),
                            $this->input->post("email"),
                            $this->input->post("direccion"),
                            // $this->input->post("fecha_nacimiento")
                        );
            }

            if($agregar == true) {
                $this->session->set_flashdata('correcto', 'Cliente añadido correctamente');
            } else {
                $this->session->set_flashdata('incorrecto', 'Hubo un problema al añadir el cliente');
            }
            redirect(base_url());
        }
        
        public function modificar($id){
            if(is_numeric($id)) {
                $datos["modificar"]=$this->Clientes_model->modificar($id);
                $this->load->view("modificar_view",$datos);
                if($this->input->post("submit")) {
                    $modificar=$this->Clientes_model->modificar(
                            $id,
                            $this->input->post("submit"),
                            $this->input->post("nombre"),
                            $this->input->post("apellido"),
                            $this->input->post("sexo"),
                            $this->input->post("email"),
                            $this->input->post("direccion"),
                            $this->input->post("fecha_nacimiento")
                        );

                    if($modificar == true) {
                        $this->session->set_flashdata('correcto', 'Cliente modificado correctamente');
                    } else {
                        $this->session->set_flashdata('incorrecto', 'Hubo un problema al modificar el cliente');
                    }
                    redirect(base_url());
                }
            } else {
                redirect(base_url());
            }
        }

        public function eliminar($id){
            if(is_numeric($id)) {
                $eliminar=$this->Clientes_model->eliminar($id);

                if($eliminar == true) {
                    $this->session->set_flashdata('correcto', 'Cliente eliminado correctamente');
                } else {
                    $this->session->set_flashdata('incorrecto', 'Hubo un problema al eliminar el cliente');
                }
                redirect(base_url());
            } else {
                redirect(base_url());
            }
        }
    }
?>