<div class="modal" id="modalDeleteUser" style="padding: 0px;">
    <h2>Eliminar Cuenta</h2>
    <div class="modalContainer">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="formPassword">
                <h4 style="background: white; text-align:center; color:black">Ingrese Contraseña Para Continuar</h4>
                <input type="password" name="password" id="password" placeholder="Contraseña...">
                <ul id="errorPassword"></ul>
            </div>
            <input type="submit" onclick="return validarPasswords()" value="Eliminar Cuenta" name="eliminarCuenta">

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; $errores?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>