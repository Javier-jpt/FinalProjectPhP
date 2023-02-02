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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LandScapers</title>
</head>
<body>

    <header>
        <navbar class="navbarheader">
            <div class="navbarlogo">
                <img class="navbarimg" src="./assets/Mi_proyecto.png">
            </div>
            <p class="navbartitle">Landscapers</p>
            <div class="navbar__button">
                <button class="log-in">Log In</button>
                <button class="register">Register</button>
            </div>
        </navbar>
    </header>

    <main>
        <section class="grid-container">
            <div class="route">
                <img class="routeimg" src="https://images.unsplash.com/photo-1619126208243-1a683b78d882?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80%22%3E">
                <p class="text">Text related to the image</p>
<button id="readMore">Read More</button>
            </div>
            <div class="route">
                <img class="routeimg" src="https://images.unsplash.com/photo-1621847468516-1ed5d0df56fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80%22%3E">
                <article class="routetext">Route 2 text</article>
            </div>
            <div class="route">
                <img class="routeimg" src="https://images.unsplash.com/photo-1610088948419-28cc15f5a397?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80%22%3E">
                <article class="routetext">Route 3 text</article>
            </div>
            <div class="route">
                <img class="routeimg" src="https://images.unsplash.com/photo-1603984973710-e915353b35fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80%22%3E">
                <article class="route__text">Route 4 text</article>
            </div>
        </section>
    </main>

    <footer>
        <p>LandScapers © 2023</p>
    </footer>

</body>
</html>