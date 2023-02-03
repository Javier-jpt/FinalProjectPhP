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
                <img class="navbar__img" src="./assets/Mi_proyecto.png">
            </div>
            <p class="navbar__title">Landscapers</p>
            <div class="navbar__button">
            </div>
        </navbar>
    </header>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <h2 class="mt-4">Crea un alumno</h2>
        <hr>
        <form method="post">
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="titulo" name="titulo" id="titulo" class="form-control">
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
            <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
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