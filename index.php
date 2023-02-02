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
                <img> logo
            </div>
            <div class="navbar__button"></div>
                <button class="log-in">Log In</button>
                <button class="register">Register</button>
            </div>
        </navbar>
    </header>

    <main>
        <section class="grid-container">
            <div class="route">
                <img class="route__img">
                <article class="route__text">Route 1 text</article>
            </div>
            <div class="route">
                <img class="route__img">
                <article class="route__text">Route 2 text</article>
            </div>
            <div class="route">
                <img class="route__img">
                <article class="route__text">Route 3 text</article>
            </div>
            <div class="route">
                <img class="route__img">
                <article class="route__text">Route 4 text</article>
            </div>
        </section>
    </main>

    <footer>
        <p>LandScapers © 2023</p>
    </footer>
    
</body>
</html>