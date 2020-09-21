<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Sandra Estética</title>
    <link rel="icon" href="img/logo.png">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64b74efe4a.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="css/scrolltop.css"/>
    <link rel="stylesheet" href="css/socialBar.css"/>
    <link rel="stylesheet" href="css/clickwp.css"/>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>

<?php 
    include "header.php";
?>
<?php 
    include "socialBar.php";
?>

<div id="myCarousel" class="carousel slide d-none d-lg-block " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 imgCarousel" height="650px" src="img/carousel1.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 imgCarousel" height="650px" src="img/carousel2.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 imgCarousel" height="650px" src="img/carousel3.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 imgCarousel" height="650px" src="img/carousel4.jpg">
        </div>    
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<section class="spamSection d-flex justify-content-around">
    <div class="row spamDiv  d-flex justify-content-center align-content-center ">
        <div class="col-xl-6 d-none d-xl-block p-3">
            <div class="pt-4 texto-boton-wp">
                <p class="text-white">Agendá tu primer consulta bonificada 
                    <br> 
                    enviándonos un WhatsApp!</p>
            </div>
        </div>   
        <a class="col-xl-6 col-12 p-3 boton-wp" href="https://wa.me/541168581110" target="_blank"><img src="img/Boton-wp.png" alt=""></a>
    </div>           
</section>
    

<div class="row p-0 m-0 tratamientosDestacados">
    <div class="col-xl-2 p-0 m-0 d-xl-block d-none">
    </div> 

    <div class="col-xl-8 col-12 p-0 m-0"> 
        <section class="destacados m-0 p-0" id="destacados">       
            <div class="row p-0 m-0">  
            
                <div class="col-12 p-0 m-0 mt-4 ">
                    <h2 class="text-center text-white" style="font-weight: bold">Servicios y tratamientos <br> destacados</h2>
                </div>

                <div class="col-xl-12 col-lg-6 col-md-12 p-0 m-0 faciales">
                    <div class="row p-0 m-0"> 
                        <h3 class="col-12 p-0 m-0 mt-2 mb-3 text-center text-white">Faciales</h3>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href="PerfiladoCejas.php"><img src="img/faciales.jpg" alt="" width="180" ></a>
                            <a href="PerfiladoCejas.php"><h4 class="text-white">Perfilado de cejas</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href="Pestañas.php"><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href="Pestañas.php"><h4 class="text-white" >Pestañas</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href="Peeling.php"><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href="Peeling.php"><h4 class="text-white">Peeling</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Masajes de cara</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Mesoterapia</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Discromías</h4></a>
                        </div>
                    </div>       
                </div>

                <div class="col-xl-12 col-lg-6 col-md-12 p-0 m-0 corporales">
                    <div class="row p-0 m-0">
                        <h3 class="col-12 mt-2 mb-3 p-0 m-0 text-center text-white">Corporales</h3>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6  col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Masajes de espalda</h4></a>
                        </div>                           
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href="Celulitis.php"><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href="Celulitis.php"><h4 class="text-white">Celulitis</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Cicatrices</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Masajes descontract.</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Drenaje linfático</h4></a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 p-0 m-0 text-center mb-4 destacadosImagen">
                            <a href=""><img src="img/faciales.jpg" alt="" width="180"></a>
                            <a href=""><h4 class="text-white">Mesoterapia</h4></a>
                        </div>
                    </div>
                </div>
            </div>     

        </section>
    </div>


    <div class="col-xl-2 p-0 d-xl-block d-none">
    </div> 
</div>


<?php 
    include "scrolltop.php"; 
    include "clickwp.php";
    include "footer.php";
?>
    

    <script src="js/scrolltop.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>