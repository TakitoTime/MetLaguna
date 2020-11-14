<div class="modal" id="modalUser" style="padding: 0px; max-width:50%">
    <h4>Cambiar Datos De Usuario</h4>
    <div class="modalContainer">
        <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="formUser">
                    <input type="hidden" name="usuarioId" value="<?php echo $usuario['id'];?>">
                    <div class="contenedorIzquierdo">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombres'];?>">
                    <ul id="errorNombre"></ul>

                    <label for="paterno">Apellido Paterno:</label><br>
                    <input type="text" name="paterno" id="paterno" value="<?php echo $usuario['apellidoPaterno'];?>">
                    <ul id="errorPaterno"></ul>

                    <label for="telefono">Telefono:</label><br>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $usuario['telefono'];?>">
                    <ul id="errorTelefono"></ul>

                    <label for="ocupacion">Ocupacion:</label><br>
                    <input type="text" name="ocupacion" id="ocupacion" value="<?php echo $usuario['ocupacion'];?>">
                    <ul id="errorOcupacion"></ul>

                </div>
                <div class="contenedorDerecho">
                    <label for="nombreUsuario">Usuario:</label><br>
                    <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?php echo $usuario['nombreUsuario'];?>">
                    <ul id="errorNombreUsuario"></ul>

                    <label for="materno">Apellido Materno:</label><br>
                    <input type="text" name="materno" id="materno" value="<?php echo $usuario['apellidoMaterno'];?>">
                    <ul id="errorMaterno"></ul>

                    <label for="edad">Edad:</label><br>
                    <input type="text" name="edad" id="edad" value="<?php echo $usuario['edad'];?>">
                    <ul id="errorEdad"></ul>

                    <label for="foto">Foto:</label><br>
                    <input type="file" name="foto" id="foto" value="<?php echo $usuario['foto'];?>">
                    <ul id="errorFoto"></ul>
                </div>
                
            </div>
            
            <input type="submit" onclick="return validarDatosUsuario()" value="Guardar Datos" name="actualizarUsuario">

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>