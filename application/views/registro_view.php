<div class="row">
    <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
        <h4>Formulario de Registro</h4>
        <hr>
        <form action="<?=base_url("Clientes_controller/agregar");?>" method="post">
            <div class="form-group">
                <label for="inputName" class="font-weight-bold">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="nombre" placeholder="Ingresa tu nombre (Min. 2 caracteres)" pattern="[A-Za-z\s]+" minlength="2" autofocus required>

                <label for="inputLastName" class="font-weight-bold">Apellido</label>
                <input type="text" class="form-control" id="inputLastName" name="apellido" placeholder="Ingresa tu apellido (Min. 2 caracteres)" pattern="[A-Za-z\s]+" minlength="2" required>

                <label for="inputEmail" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu email (example@mail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                <label for="inputAddress" class="font-weight-bold">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" name="direccion" placeholder="Ingresa tu dirección (Min. 2 caracteres)" pattern="[\S\s]*\S[\S\s]*" minlength="2" required>
            </div>
            <div class="form-group">
                <label for="selectGenre" class="font-weight-bold">Sexo</label>
                <select class="form-control" id="selectGenre" name="sexo" required>
                    <option selected value="">Selecciona una opción</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
            <div class="text-right">
                <input class="btn btn-success" type="submit" name="submit" value="Agregar">
                <input class="btn btn-primary" type="reset" value="Restablecer">
            </div>
        </form>
        </div>
    </div>
</div>