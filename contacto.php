<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64b74efe4a.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Sandra Estética - Contacto</title>
    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/socialBar.css">
    <link rel="stylesheet" href="css/scrolltop.css">
    <link rel="stylesheet" href="css/clickwp.css">
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>

<?php 
include "header.php";
include "socialBar.php";
?>
<div class="container contenedor">
    <h2>Contacto</h2>
    <div class="form">
        <form action="datosform.php" method="POST">
            <div class="form-group">
                <label for="campoNombre">Nombre y apellido</label>
                <input type="text" class="form-control" id="campoNombre" name="nombre" placeholder="Nombre y apellido*" required>
            </div>
            <div class="form-group">
            <label for="campoEmail">Email</label>
            <input type="email" class="form-control" id="campoEmail" name="email" placeholder="Email*" required>
            </div>
            <div class="form-group">
                <label for="campoTelefono">Tel / Celular</label>
                <input type="tel" class="form-control" id="campoTel" name="tel" placeholder="Teléfono o celular*" required>
            </div>
            
            <div class="form-group">
                <label for="campoTratamiento">Tratamiento</label>
                <select id="campoTratamiento" class="form-control" name="tratamiento" required>
                    <option selected value="">Elija su tratamiento</option>
                    <option value="1">Facial 1</option>
                    <option value="2">Facial 2</option>
                    <option value="3">Corporal 1</option>
                    <option value="4">No sé cuál elegir.</option>
                </select>
            </div>
            <div class="form group">
                <label for="campoConsulta">Consulta</label>
                <textarea name="consulta" id="campoConsulta" cols="3" rows="5" class="form-control" placeholder="Consulta*" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary boton">Enviar</button>
        </form>
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