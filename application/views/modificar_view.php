<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
        <h4>Modificar Cliente</h4>
        <hr>
        <form action="" method="post">
            <?php
            foreach($modificar as $fila) {
            ?>
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="nombre" value="<?=$fila->nombre?>">

                <label for="inputLastName">Apellido</label>
                <input type="text" class="form-control" id="inputLastName" name="apellido" value="<?=$fila->apellido?>">

                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" value="<?=$fila->email?>">

                <label for="inputAddress">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" name="direccion" value="<?=$fila->direccion?>">
            </div>
            <div class="form-group">
                <label for="selectGenre">Sexo</label>
                <select class="form-control" id="selectGenre" name="sexo">
                    <?php
                    if ($fila->sexo == "Masculino") {
                    ?>
                        <option><?=$fila->sexo?></option>
                        <option>Femenino</option>
                    <?php
                    } else {
                    ?>
                        <option><?=$fila->sexo?></option>
                        <option>Masculino</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="text-right">
                <input class="btn btn-success" type="submit" name="submit" value="Modificar">
            </div>
            <?php
            }
            ?>
        </form>
    </div>
</div>
