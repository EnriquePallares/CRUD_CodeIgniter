<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h4>Detalles del Cliente</h4>
<hr>
<div class="card">
    <?php
    foreach($verDetalle as $fila) {
    ?>
    <div class="card-body text-center text-white bg-info">
        <h5 class="card-title"><?=$fila->nombre?> <?=$fila->apellido?></h5>
        <h6 class="card-subtitle mb-2"><?=$fila->email?></h6>
        <h6 class="card-subtitle mb-2"><?=$fila->direccion?></h6>
        <h6 class="card-subtitle mb-2"><?=$fila->sexo?></h6>
    </div>
    <?php
    }
    ?>
</div>