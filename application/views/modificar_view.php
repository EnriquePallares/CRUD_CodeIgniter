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
                <label for="inputName" class="font-weight-bold">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ][A-Za-zñÑáéíóúÁÉÍÓÚ ]+" minlength="2" required value="<?=$fila->nombre?>" >

                <label for="inputLastName" class="font-weight-bold">Apellido</label>
                <input type="text" class="form-control" id="inputLastName" name="apellido" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ][A-Za-zñÑáéíóúÁÉÍÓÚ ]+" minlength="2" required value="<?=$fila->apellido?>">

                <label for="inputEmail" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" minlength="2" required value="<?=$fila->email?>">

                <label for="inputAddress" class="font-weight-bold">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" name="direccion" pattern="[\S\s]*\S[\S\s]*" minlength="2" required value="<?=$fila->direccion?>">
            </div>
            <div class="form-group">
                <label for="selectGenre" class="font-weight-bold">Sexo</label>
                <select class="form-control" id="selectGenre" name="sexo" required>
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
