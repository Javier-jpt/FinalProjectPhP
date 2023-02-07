<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="text/css" href=https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap%27>
    <title>LandScapers</title>
</head>
<body>
    

    <header>
        <navbar class="navbarheader">
            <div class="navbarlogo">
                <a class="register" onclick="window.location.href='index.php'"><img class="navbarimg" src="./assets/Mi_proyecto.png"></a>
            </div>
            <p class="navbartitle">Landscapers</p>
            <div class="navbar__button">
                <button id="btn-open-modal" class="btn btn-warning">Create Post</button>
            </div>

                <!-- MODAL -->

        </navbar>
    </header>

    <main>
    <section class="grid-container">
            <div class="route">
                <img class="route__img" src="https://images.unsplash.com/photo-1619126208243-1a683b78d882?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80">
                <details>
                    <summary class="summary__text">Route</summary>
                    <p>sdfn jaksjang aja aja ag kajkjaga slkjgbakgba kgfdnasivblk  asd kjabglkabakj fkj bkla gñ</p>
                </details>
            </div>
            <div class="route">
                <img class="route__img" src="https://images.unsplash.com/photo-1621847468516-1ed5d0df56fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80">
                <details>
                    <summary class="summary__text">Route</summary>
                    <p>sdfn jaksjang aja aja ag kajkjaga slkjgbakgba kgfdnasivblk  asd kjabglkabakj fkj bkla gñ</p>
                </details>
            </div>
            <div class="route">
                <img class="route__img" src="https://images.unsplash.com/photo-1610088948419-28cc15f5a397?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80">
                <details>
                    <summary class="summary__text">Route</summary>
                    <p>sdfn jaksjang aja aja ag kajkjaga slkjgbakgba kgfdnasivblk  asd kjabglkabakj fkj bkla gñ</p>
                </details>
            </div>
            <div class="route">
                <img class="route__img" src="https://images.unsplash.com/photo-1603984973710-e915353b35fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <details>
                    <summary class="summary__text">Route</summary>
                    <p>sdfn jaksjang aja aja ag kajkjaga slkjgbakgba kgfdnasivblk  asd kjabglkabakj fkj bkla gñ</p>
                </details>
            </div>
    </main>

    <footer>
        <p>LandScapers © 2023</p>
    </footer>
    <script src="logic.js"></script>
</body>
</html>



                <!-- MODAL FUNCIONAL!!! -->

            <!-- <dialog id="modal">
                <h2>Create a POST</h2>
                <form method="dialog">
                    <label>Title <input type="text"></label><br>
                    <label>Expirience<input type="text"></label><br>
                    <button type="submit" class="btn btn-warning">Send Post</button>
                </form>
                <button type="button" class="btn btn-danger" id="btn-close-modal">Close</button>
            </dialog> -->