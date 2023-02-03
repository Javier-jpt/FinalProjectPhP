<?php

include_once "user.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>LandScapers</title>
</head>
<body>

    <header>
        <navbar class="navbar__header">
            <div class="navbar__logo">
            <a class="register" onclick="window.location.href='index.php'"><img class="navbarimg" src="./assets/Mi_proyecto.png"></a>
            </div>
            <p class="navbar__title">Landscapers</p>
            <div class="navbar__button">
            </div>
        </navbar>
    </header>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <h2 class="mt-4">Create POST</h2>
        <hr>
        <form method="post">
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="titulo" name="titulo" id="titulo" class="form-control">
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        </div>
        <div class="form-group">
            <label for="contenidopost">Contenido texto</label>
            <input type="text" name="contenidopost" id="contenidopost" class="form-control">
        </div>
        </form>
    </div>
    </div>
</div>
    <footer>
        <p>LandScapers © 2023</p>
    </footer>
    
</body>
</html>