<?php

require './config/datapost.php';

$sqlRoutes = "SELECT p.ID, p.title, p.content, r.Route AS route FROM posts AS p INNER JOIN route AS r ON p.id_route=r.ID";
$Routes = $conn->query($sqlRoutes);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandScapers</title>

    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/first_page.css">
</head>
<body>
<header>
        <a href="#" class="logo">Logo</a>
        <ul>
            <li><button id="btn_top" class="log-in" onclick="window.location.href='login-index.php'">Log In</button></li>
            <li><button id="btn_top" class="register" onclick="window.location.href='register.php'">SignUp</button></li>
            <li><button id="btn_top" class="register" onclick="window.location.href='profile.php'">profile</button></li>
        </ul>
    </header>
    <section>
        
        <img src="arriba3.webp" alt="part1" id="top">
        <h2 id="text"></h2>
        <img src="parte_medio.webp" alt="part1" id="midle">
        <img src="sun2.webp" alt="part1" id="sun">
        <a href="#sec" id="btn">Explore</a>
        <img src="trees.webp" alt="part1" id="bottom">
    </section>
    <div class="sec" id="sec">
      



    <div class="container py-3">

        <h2 class="text-center">LANDSCAPERS</h2>

        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newModal"><i class="fa-solid fa-circle-plus"></i> New Post</a>
            </div>
        </div>

    </div>

    <table class="table table-sm table-striped table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Route</th>
                <th>Imagen</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

     
    </div>


    <script>
        const clouds = document.getElementById('top');
        const sun = document.getElementById('sun');
        const montains = document.getElementById('midle');
        const trees = document.getElementById('bottom');
        const text = document.getElementById('text');
        const button = document.getElementById('btn');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            clouds.style.left = value * 0.5 + 'px';
            sun.style.top = value * 1.05 + 'px';
            montains.style.top = value * + 0 + 'px';
            // trees.style.top = value * - 0.15 + 'px';
            text.style.marginRight =value * 4 + 'px';
            button.style.marginTop =value * 1.5 + 'px';

        })
    </script>
    
</body>
</html>



            <?php while ($row_route = $Routes->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row_route['ID']; ?></td>
                    <td><?= $row_route['title']; ?></td>
                    <td><?= $row_route['content']; ?></td>
                    <td><?= $row_route['route']; ?></td>
                    <td></td>
                    <td>
                <a href="#" class="btn btn-sm btn-warning edit" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="<?= $row_route['ID'] ?>"><i class="fa-solid fa-pen-to-square"></i>  Edit</a>
                <a href="#" class="btn btn-sm btn-danger delete" data-bs-id="<?= $row_route['ID'] ?>"><i class="fa-solid fa-trash"></i>  Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    <?php
    $sqlRoute = "SELECT ID, Route FROM route";
    $route = $conn->query($sqlRoute);
    ?>

    <?php include './posts/newModal.php'; ?>

    <?php $route->data_seek(0); ?>

    <?php include './posts/editModal.php'; ?>

    <script>

        let editModal = document.getElementById('editModal')

        editModal.addEventListener('shown.bs.modal', event=> {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editModal.querySelector('.modal-body #id')
            let inputTitle = editModal.querySelector('.modal-body #title')
            let inputContent = editModal.querySelector('.modal-body #content')
            let inputRoute = editModal.querySelector('.modal-body #route')

            let url = "./posts/getPost.php"
            let formData = new FormData()
            formData.append('ID',id)

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {

                inputId.value = data.ID
                inputTitle.value = data.title
                inputContent.value = data.content
                inputRoute.value = data.id_route

        }).catch(err => console.log(err))

        })
    </script>
<script>
    let deleteButtons = document.querySelectorAll('.delete')

    deleteButtons.forEach(deleteButton => {
        deleteButton.addEventListener('click', event => {
            event.preventDefault()
            let id = deleteButton.getAttribute('data-bs-id')
            let result = confirm(`Are you sure you want to delete post with id ${id}?`)

            if (result) {
                let xhr = new XMLHttpRequest()
                xhr.open('DELETE', `./config/datapost.php?id=${id}`, true)
                xhr.send()

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        location.reload()
                    }
                }
            }
        })
    })
</script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>