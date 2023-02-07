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
</head>
<body>

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

            <?php while ($row_route = $Routes->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row_route['ID']; ?></td>
                    <td><?= $row_route['title']; ?></td>
                    <td><?= $row_route['content']; ?></td>
                    <td><?= $row_route['route']; ?></td>
                    <td></td>
                    <td>

                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="<?= $row_route['ID'] ?>"><i class="fa-solid fa-pen-to-square"></i>  Edit</a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i>  Delete</a>

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

                inputId.value = data.id
                inputTitle.value = data.title
                inputContent.value = data.content
                inputRoute.value = data.id_route

        }).catch(err => console.log(err))

        })
    </script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>