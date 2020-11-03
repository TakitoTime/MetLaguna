<div class="modal" id="modalUser" style="padding: 0px;">
    <h4>Cambiar Datos De Usuario</h4>
    <div class="modalContainer">
        <form action="" method="post">
            <div class="formUser">
                <div class="contenedorIzquierdo">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre">
                    <ul id="errorNombre"></ul>

                    <label for="paterno">Apellido Paterno:</label><br>
                    <input type="text" name="paterno" id="paterno">
                    <ul id="errorPaterno"></ul>

                    <label for="telefono">Telefono:</label><br>
                    <input type="text" name="telefono" id="telefono">
                    <ul id="errorTelefono"></ul>

                    <label for="ocupacion">Ocupacion:</label><br>
                    <input type="text" name="ocupacion" id="ocupacion">
                    <ul id="errorOcupacion"></ul>

                </div>
                <div class="contenedorDerecho">
                    <label for="nombreUsuario">Usuario:</label><br>
                    <input type="text" name="nombreUsuario" id="nombreUsuario">
                    <ul id="errorNombreUsuario"></ul>

                    <label for="materno">Apellido Materno:</label><br>
                    <input type="text" name="materno" id="materno">
                    <ul id="errorMaterno"></ul>

                    <label for="edad">Edad:</label><br>
                    <input type="text" name="edad" id="edad">
                    <ul id="errorEdad"></ul>

                    <label for="foto">Foto:</label><br>
                    <input type="text" name="foto" id="foto">
                    <ul id="errorFoto"></ul>
                </div>
                
            </div>
            
            <button type="button" onclick="validarDatosUsuario()" class="">Guardar Cambios</button>
        </form>
    </div>
</div>