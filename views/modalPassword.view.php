<div class="modal" id="modalPassword" style="padding: 0px;">
    <h2>Cambiar Contraseña</h2>
    <div class="modalContainer">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="formPassword">
                <input type="password" name="passwordActual" id="passwordActual" placeholder="Contraseña Actual...">
                <br>
                <input type="password" name="password" id="password" placeholder="Contraseña...">
                <ul id="errorPassword"></ul>
                <input type="password" name="password2" id="password2" placeholder="Repetir Contraseña...">
                <ul id="errorPassword2"></ul>
            </div>
            <input type="submit" onclick="return validarPasswords()" value="Guardar Cambios" name="actualizarPasswords">

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