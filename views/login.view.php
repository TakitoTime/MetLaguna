<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro-login.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css" crossorigin="anonymous">
</head>
<body>
    <?php require('navBar.view.php');?>

    <section class="container">
        <div class="cardRegister">
            <div class="img">
                <!--<img src="img/icons/logo.png" alt="">-->
            </div>
            <div class="form-registro">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>

                <h2>Iniciar Sesion</h2>

                <div class="form">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    
                        <input type="email" name="email" placeholder="Correo..." id="email">
                        <ul id="errorEmail"></ul>
                        <input type="password" name="password" placeholder="Contraseña..." id="password">
                        <ul id="errorPassword"></ul>
 
                        <input type="submit" onclick="return validarSesion()" value="Ingresar">

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
<script src="js/login.js" crossorigin="anonymous"></script>
</html>