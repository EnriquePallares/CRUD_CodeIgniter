<?php
    class Clientes_controller extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->helper("url"); 
            $this->load->model("Clientes_model");
            $this->load->library("session");
        }

        public function index() {
            $this->load->view("header_view");
            $this->load->view("registro_view");
            $this->load->view("footer_view");
        }

        public function verClientes() {
            $this->load->view("header_view");
            $clientes["ver"] = $this->Clientes_model->ver();
            $this->load->view("clientes_view", $clientes);
            $this->load->view("footer_view");
        }

        public function agregar() {
            if($this->input->post("submit")) {
                $agregar = $this->Clientes_model->agregar(
                            $this->input->post("nombre"),
                            $this->input->post("apellido"),
                            $this->input->post("sexo"),
                            $this->input->post("email"),
                            $this->input->post("direccion")
                        );
            }

            if($agregar == true) {
                $this->session->set_flashdata('correcto', 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Cliente registrado correctamente
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            } else {
                $this->session->set_flashdata('incorrecto', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    El email "'.$this->input->post("email").'" ya fue registrado
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            }
            redirect(base_url("Clientes_controller/verClientes/"));
        }
        
        public function modificar($id){
            if(is_numeric($id)) {
                $this->load->view("header_view");
                $datos["modificar"]=$this->Clientes_model->modificar($id);
                $this->load->view("modificar_view",$datos);
                $this->load->view("footer_view");
                if($this->input->post("submit")) {
                    $modificar=$this->Clientes_model->modificar(
                            $id,
                            $this->input->post("submit"),
                            $this->input->post("nombre"),
                            $this->input->post("apellido"),
                            $this->input->post("sexo"),
                            $this->input->post("email"),
                            $this->input->post("direccion")
                        );

                    if($modificar == true) {
                        $this->session->set_flashdata('correcto', 
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Cliente modificado correctamente
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                    } else {
                        $this->session->set_flashdata('incorrecto', 
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Hubo un problema al modificar el cliente
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                    }
                    redirect(base_url("Clientes_controller/verClientes/"));
                }
            } else {
                redirect(base_url("Clientes_controller/verClientes/"));
            }
        }

        public function eliminar($id){
            if(is_numeric($id)) {
                $eliminar=$this->Clientes_model->eliminar($id);

                if($eliminar == true) {
                    $this->session->set_flashdata('correcto', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Cliente eliminado correctamente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                } else {
                    $this->session->set_flashdata('incorrecto', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Hubo un problema al eliminar el cliente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                }
                redirect(base_url("Clientes_controller/verClientes/"));
            } else {
                redirect(base_url("Clientes_controller/verClientes/"));
            }
        }

        public function verDetalle($id){
            $this->load->view("header_view");
            $clientes["verDetalle"] = $this->Clientes_model->verDetalle($id);
            $this->load->view("detalles_view", $clientes);
            $this->load->view("footer_view");
        }
    }
?>