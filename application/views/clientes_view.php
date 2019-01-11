<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>CRUD - CodeIgniter</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                <header>
                    <h1 class="text-center">CRUD con CodeIgniter</h1>
                    <?php
                        if($this->session->flashdata('correcto'))
                            echo $this->session->flashdata('correcto');
                        
                        if($this->session->flashdata('incorrecto'))
                            echo $this->session->flashdata('incorrecto');
                    ?>
                </header>
            </div>
            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                <form action="<?=base_url("Clientes_controller/agregar");?>" method="post">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="inputName" name="nombre" placeholder="Ingresa tu nombre">

                        <label for="inputLastName">Apellido</label>
                        <input type="text" class="form-control" id="inputLastName" name="apellido" placeholder="Ingresa tu apellido">

                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu email">

                        <label for="inputAddress">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress" name="direccion" placeholder="Ingresa tu dirección">
                    </div>
                    <div class="form-group">
                        <label for="selectGenre">Selecciona tu sexo</label>
                        <select class="form-control" id="selectGenre" name="sexo">
                            <option>Selecciona una opción</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    <input class="btn btn-danger" type="reset" value="Reset">
                </form>
                <hr><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Sexo</th>
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
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>