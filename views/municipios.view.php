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
        <div class="banner">
            <h1>Gomez Palacio</h1>
        </div>

        <div class="lugares">
            <h1>Lugares</h1>

            <div class="slider">
                <h3>Museos</h3>
                <div class="sliderContent">
                    <div class="arrowLeft"><i class="fas fa-arrow-circle-left"></i></div>
                    <div class="card bg-dark text-white sliderLugar">
                        <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Torreon</h5>
                            <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card bg-dark text-white sliderLugar">
                        <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Torreon</h5>
                            <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card bg-dark text-white sliderLugar">
                        <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Torreon</h5>
                            <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>  
                    <div class="arrowRight"><i class="fas fa-arrow-circle-right"></i></div>
                </div>
            </div>

            <div class="slider">
                <h3>Monumentos</h3>
                    <div class="sliderContent">
                        <div class="arrowLeft"><i class="fas fa-arrow-circle-left"></i></div>
                        <div class="card bg-dark text-white sliderLugar">
                            <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Torreon</h5>
                                <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white sliderLugar">
                            <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Torreon</h5>
                                <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white sliderLugar">
                            <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Torreon</h5>
                                <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>  
                        <div class="arrowRight"><i class="fas fa-arrow-circle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="gastronomia">
            <h1>Gastronomia</h1>
            <div class="slider">
                <div class="sliderContent">
                    <div class="sliderContent">
                            <div class="arrowLeft"><i class="fas fa-arrow-circle-left"></i></div>
                            <div class="card bg-dark text-white sliderLugar">
                                <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Torreon</h5>
                                    <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card bg-dark text-white sliderLugar">
                                <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Torreon</h5>
                                    <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card bg-dark text-white sliderLugar">
                                <img src="img/puertaTorreon.jpg" class="card-img imgsliderLugar" alt="">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Torreon</h5>
                                    <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>  
                            <div class="arrowRight"><i class="fas fa-arrow-circle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <?php require('footer.view.php');?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03ad672f06.js" crossorigin="anonymous"></script>
</html>