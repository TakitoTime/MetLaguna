<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css" crossorigin="anonymous">
</head>
<body>
    <?php require('navBar.view.php');?>

    <section class="contenedor">
        
        <div class="banner">
        </div>

        <div class="cardPerfil">
            <div class="info">
                <div class="name-age"> 
                    <div class="name">
                        <h3>David Pulido Valdez</h3>
                        <h2>Estudiante Del Tec Lerdo y Practicante</h2>
                    </div>  
                    <div class="age">
                        <h3>23 Años</h3>         
                   </div>
                </div>
                <div class="contact">
                    <h5><i class="fas fa-user"></i> TakitoTime</h5>
                    <h5><i class="fas fa-envelope-open-text"></i> sillapone@gmail.com</h5>
                    <h5><i class="fas fa-phone-alt"></i> 8713975574</h5>
                </div>
                <div class="button">
                    <a href="#">Cambiar Contraseña</a>
                </div>
            </div>
            
            <div class="img" style="display: flex;">
                <a href="#"><i class="fas fa-user"></i></a>
            </div>
        </div>

        <div class="cardItinerarios">
            <div class="headerItienerarios">
                <div class="title">
                    <h1>Itinerarios</h1>
                </div>
                <div class="buttonAdd">
                    <div class="clearFixbutton" style="width: 50%;"></div>
                    <a href="#"><i class="fas fa-phone-plus"></i> Nuevo Itinerario </a>
                </div>
            </div>
        </div>

    </section>
    <?php require('footer.view.php');?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/6a68a5567b.js" crossorigin="anonymous"></script>
</html>