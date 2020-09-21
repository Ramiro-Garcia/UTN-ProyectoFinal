<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64b74efe4a.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Sandra Estética - Peeling</title>
    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/socialBar.css">
    <link rel="stylesheet" href="css/scrolltop.css">
    <link rel="stylesheet" href="css/clickwp.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/servicio.css">
</head>
<body>
    <?php 
        include "header.php";
        include "socialBar.php";
    ?>

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

<section class="sectionServicio">
    <div class="container pt-5 pb-3 servicio">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-12 p-0 pl-5 pb-3 pr-lg-0 pr-md-5 pr-sm-5 pr-5">
                <h1> Peeling</h1>
                <hr>
                <p class="infoServicio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet officiis odit, qui accusamus deleniti ex earum quia autem minima illo voluptatum, excepturi, nihil nostrum blanditiis fuga inventore. Illo, magni dicta.</p>
                <p class="infoServicio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis dolorem qui modi temporibus unde ipsum! Laboriosam odio, optio id, amet pariatur nisi aliquid quasi incidunt molestias sed harum aut. Eveniet?</p>
            </div>
            <div class="col-xl-6 col-lg-7 col-12 p-0 pb-3 d-flex justify-content-center align-content-center">
                <img src="img/faciales.jpg" alt="" width="75%">
            </div>
            <?php 
                include "contactEnPag.php"
            ?>
        </div>
    </div>    
</section>
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