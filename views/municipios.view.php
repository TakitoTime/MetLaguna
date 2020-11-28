<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/municipios.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css" crossorigin="anonymous">
</head>
<body>
    <?php require('navBar.view.php');?>

    <section class="contenedor">
        <div class="banner" style="background: url('<?php echo $municipio['url']?>'); background-size: cover; background-repeat: round;">
            <h1><?php echo $municipio['nombre']?></h1>
        </div>

        <div class="lugares">
            <h1>Lugares</h1>

            <?php 
            $cont=1;
            foreach($tipoLugares as $tipoLugar){
                    
                $id=$tipoLugar['id'];
                $nombre=$tipoLugar['nombre'];
                $descripcion=$tipoLugar['descripcion'];
                $url=$tipoLugar['url'];

                ?>
                <div class="slider">
                <h3><?php echo $nombre?></h3>
                    <div class="sliderGastronomia">
                        <div class="arrowLeft"><i class="fas fa-arrow-circle-left"></i></div>
                        <div class="sliderContent">
                            <div class="card bg-dark text-white sliderLugar">
                                    <img src="<?php echo $url?>" class="card-img imgsliderLugar" alt="">
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php echo $nombre?></h5>
                                    <p class="card-text" style="text-align: justify;"><?php echo $descripcion?></p>
                                </div>
                            </div>
                            <div class="card bg-dark text-white sliderLugar">
                                    <img src="<?php echo $url?>" class="card-img imgsliderLugar" alt="">
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php echo $nombre?></h5>
                                    <p class="card-text" style="text-align: justify;"><?php echo $descripcion?></p>
                                </div>
                            </div>
                            <div class="card bg-dark text-white sliderLugar">
                                    <img src="<?php echo $url?>" class="card-img imgsliderLugar" alt="">
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php echo $nombre?></h5>
                                    <p class="card-text" style="text-align: justify;"><?php echo $descripcion?></p>
                                </div>
                            </div> 
                        </div> 
                        <div class="arrowRight"><i class="fas fa-arrow-circle-right"></i></div>
                    </div>
                </div>
                <?php
            }
            ?>   

        </div>

        <div class="gastronomia">
            <h1>Gastronomia</h1>
            <div class="slider">

                <div class="error_box" id="errorBoxComidaTipica">
                    <!--<p>Se ha producido un error.</p>-->
                </div>

                <div class="sliderGastronomia">
                    
                    <div class="arrowLeft" id="btnPreviousComidaTipica"><i class="fas fa-arrow-circle-left"></i></div>

                    <div class="sliderContent" id="divComidaTipica"></div>

                    <div class="arrowRight" id="btnNextComidaTipica"><i class="fas fa-arrow-circle-right"></i></div>

                </div>


                <div class="loader" id="loaderComidaTipica"></div>

            </div>
        </div>
        
    </section>
    <?php require('footer.view.php');?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="http://blog.ikhuerta.com/jsDownload/dollar_get.js" type="text/javascript"></script>
<script src="js/ajaxComidaTipica.js?id=<?php echo $_GET['id']?>" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/03ad672f06.js" crossorigin="anonymous"></script>
</html>