<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formularioRegistro.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css" crossorigin="anonymous">
</head>
<body>
    <?php require('navBar.view.php');?>

    <section class="container">
        <div class="cardRegister">
            <div class="form-registro">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>

                <h3>Completa La Siguente Informacion</h3>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form">
                        <div class="contenedorIzquierdo">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre...">
                            <ul id="errorNombre"></ul>

                            <input type="text" name="paterno" id="paterno" placeholder="Apellido Paterno...">
                            <ul id="errorPaterno"></ul>

                            <input type="text" name="telefono" id="telefono" placeholder="Telefono...">
                            <ul id="errorTelefono"></ul>

                            <input type="text" name="ocupacion" id="ocupacion" placeholder="Ocupacion...">
                            <ul id="errorOcupacion"></ul>
                        </div>
                        <div class="contenedorDerecho">
                            <input type="text" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre De Usuario...">
                            <ul id="errorNombreUsuario"></ul>

                            <input type="text" name="materno" id="materno" placeholder="Apellido Materno...">
                            <ul id="errorMaterno"></ul>

                            <input type="text" name="edad" id="edad" placeholder="Edad...">
                            <ul id="errorEdad"></ul>

                            <input type="file" name="foto" id="foto" placeholder="Foto De Perfil...">
                            <ul id="errorFoto"></ul>

                        </div>
                    </div>
                    <input type="submit" onclick="return validarDatosUsuario()" value="Ingresar">
                    
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
        </div>
    </section>
    <?php require('footer.view.php');?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03ad672f06.js" crossorigin="anonymous"></script>
<script src="js/perfil.js" crossorigin="anonymous"></script>
</html>