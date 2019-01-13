<div class="row">
    <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
        <h4>Formulario de Registro</h4>
        <hr>
        <form action="<?=base_url("Clientes_controller/agregar");?>" method="post">
            <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="nombre" placeholder="Ingresa tu nombre" autofocus required>

                <label for="inputLastName">Apellido</label>
                <input type="text" class="form-control" id="inputLastName" name="apellido" placeholder="Ingresa tu apellido" required>

                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                <label for="inputAddress">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" name="direccion" placeholder="Ingresa tu dirección" required>
            </div>
            <div class="form-group">
                <label for="selectGenre">Selecciona tu sexo</label>
                <select class="form-control" id="selectGenre" name="sexo" required>
                    <option value="">Selecciona una opción</option>
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