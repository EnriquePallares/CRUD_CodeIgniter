<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    if($this->session->flashdata('correcto'))
        echo $this->session->flashdata('correcto');
                        
    if($this->session->flashdata('incorrecto'))
        echo $this->session->flashdata('incorrecto');
?>   
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Sexo</th>
                <th scope="col">Direccion</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($ver as $fila) {
            ?>
            <tr>
                <td><?=$fila->nombre;?></td>
                <td><?=$fila->apellido;?></td>
                <td><?=$fila->email;?></td>
                <td><?=$fila->sexo;?></td>
                <td><?=$fila->direccion;?></td>
                <td><a class="btn btn-info" href="<?=base_url("Clientes_controller/verDetalle/$fila->id")?>">Ver Detalles</a></td>                                
                <td><a class="btn btn-warning" href="<?=base_url("Clientes_controller/modificar/$fila->id")?>">Modificar</a></td>
                <td><a class="btn btn-danger" href="<?=base_url("Clientes_controller/eliminar/$fila->id")?>">Eliminar</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>