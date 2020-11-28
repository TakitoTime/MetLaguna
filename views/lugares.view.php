<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lugares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lugares.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css" crossorigin="anonymous">
</head>
<body>
    <?php require('navBar.view.php');?>

    <section class="contenedor">

        <div class="banner">
            <h1>Conoce Los Diferences Lugares Turisticos De La Laguna</h1>
        </div>
        

        <section class="bodyLugares">
            <div class="lugares">
                <h3><?php echo $nombre?></h3>
                <div class="lugaresContainer">
                    <div class="card lugarCard">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="img/arocena.jpg" class="card-img imageCard" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Arocena</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="button">
                                    <div class="clearFix" style="width: 50%;"></div>
                                    <div class="viewMore" style="width: 50%;">
                                        <a href="#">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card lugarCard">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="img/arocena.jpg" class="card-img imageCard" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Arocena</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="button">
                                    <div class="clearFix" style="width: 50%;"></div>
                                    <div class="viewMore" style="width: 50%;">
                                        <a href="#">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card lugarCard">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="img/arocena.jpg" class="card-img imageCard" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Arocena</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="button">
                                    <div class="clearFix" style="width: 50%;"></div>
                                    <div class="viewMore" style="width: 50%;">
                                        <a href="#">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gastronomia">
                <h4>Comidas Tipicas De La Region</h4>
                <div class="gastronomiaContainer">
                    <div class="card platilloCard">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="img/gorditas.jpg" class="card-img imageCardPlatillo" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body platilloContainer">
                                    <h5 class="card-title platilloTitle">Arocena</h5>
                                    <p class="card-text">This is a wider card with supporting text...</p>
                                    <div class="button">
                                        <div class="clearFix" style="width: 50%;"></div>
                                        <div class="viewMore" style="width: 50%;">
                                            <a href="#">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card platilloCard">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/gorditas.jpg" class="card-img imageCardPlatillo" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body platilloContainer">
                                    <h5 class="card-title platilloTitle">Arocena</h5>
                                    <p class="card-text">This is a wider card with supporting text...</p>
                                    <div class="button">
                                        <div class="clearFix" style="width: 50%;"></div>
                                        <div class="viewMore" style="width: 50%;">
                                            <a href="#">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card platilloCard">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/gorditas.jpg" class="card-img imageCardPlatillo" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body platilloContainer">
                                    <h5 class="card-title platilloTitle">Arocena</h5>
                                    <p class="card-text">This is a wider card with supporting text...</p>
                                    <div class="button">
                                        <div class="clearFix" style="width: 50%;"></div>
                                        <div class="viewMore" style="width: 50%;">
                                            <a href="#">Ver Mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
    <?php require('footer.view.php');?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03ad672f06.js" crossorigin="anonymous"></script>
</html>