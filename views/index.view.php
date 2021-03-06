<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetLaguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css" crossorigin="anonymous">
</head>
<body>
    <?php require('navBar.view.php');?>

    <section id="banner">
		<video autoplay loop >
			<source src="resouce/banner.mp4">
		</video>
		<div class="inner">	
			<header>
				<h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Conociendo la laguna</h1>
				<p style="width: 20cm;">Esta conformada por 6 municipios del estado de Coahuila y 12 del estado de Durango, dentro de ella se 
				encuentra la novena zona metropolitana más poblada de México. Si estas pensando visitar la laguna, debes estar preparado
				para conocer lo que realmente nos representa.</p>
			</header>
			<a href="#main" class="more"><i class="fab fa-facebook-f"></i></a>
		</div>
    </section>
    
    <section id="main" class="municipios">
        <h1>Explora Sus Municipios</h1>

        <div class="municipio-container">
        <?php foreach($municipios as $municipio){

        $id=$municipio['id'];
        $nombre=$municipio['nombre'];
        $descripcion=$municipio['descripcion'];
        $url=$municipio['url'];

        ?>
            <div class="card bg-dark text-white municipio">
                <a href="municipios.php?id=<?php echo $id?>" style="padding: 0px;">
                    <img src="<?php echo $url?>" class="card-img imgMunicipio" alt="torreon">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><?php echo $nombre?></h5>
                        <p class="card-text" style="text-align: justify;"><?php echo utf8_encode($descripcion)?></p>
                    </div>
                </a>
            </div>

        <?php 
        }
        ?>
        </div>
    </section>

    <section class="lugares">
        <h1>Visita sus Calles y Lugares</h1>

        <div class="lugares-container" >
            <?php 
            $cont=1;
            foreach($tipoLugares as $tipoLugar){
                    
                $id=$tipoLugar['id'];
                $nombre=$tipoLugar['nombre'];
                $descripcion=$tipoLugar['descripcion'];
                $url=$tipoLugar['url'];

                if($cont%2 == 0){

                ?>
                    <div class="lugar">
                        <div class="clearfix-lugarleft" style="width: 40%;">
                        </div>
                        
                        <div class="card bg-dark text-white lugarRight" style="width: 60%;">
                            <a href="lugares.php?id=<?php echo $id?>&nombre=<?php echo $nombre?>" style="padding: 0px;">
                                <img src="<?php echo $url?>" class="card-img imgLugar" alt="museo">
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php echo $nombre?></h5>
                                    <p class="card-text"><?php echo $descripcion?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php 
                }
                else{

                ?>
                    <div class="lugar">
                        <div class="card bg-dark text-white lugarRight" style="width: 60%;">
                            <a href="lugares.php?id=<?php echo $id?>&nombre=<?php echo $nombre?>" style="padding: 0px;">
                                <img src="<?php echo $url?>" class="card-img imgLugar" alt="museo">
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php echo $nombre?></h5>
                                    <p class="card-text"><?php echo $descripcion?></p>
                                </div>
                            </a>
                        </div>

                        <div class="clearfix-lugarleft" style="width: 40%;">
                        </div>
                    </div>
                <?php
                }
                $cont++;
            }
            ?>            
        </div>
    </section>

    <section class="gastronomia">
        <h1>Conoce Nuestra Gastronomia</h1>

        <div class="card bg-dark text-white gastronomia-content">
            <a href="gastronomia.php" style="padding: 0px;">
                <img src="img/reliquia.jpeg" class="card-img" alt="gastronomia">
                <div class="card-img-overlay">
                    <h5 class="card-title">Gastronomia</h5>
                </div>
            </a>
        </div>
    </section>
    <?php require('footer.view.php');?>
</body>
<script src="js/index.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03ad672f06.js" crossorigin="anonymous"></script>
</html>