<?php

require './config/datapost.php';

$sqlRoutes = "SELECT p.ID, p.username, p.adress, p.age, p.email, role_id AS route FROM user AS p INNER JOIN route AS r ON p.role_id=r.ID";
$role = $conn->query($sqlRoutes);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandScapers</title>
    <script src="./assets/js/logic.js"></script>
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    <div class="sec" id="sec">
    <div class="container py-3">

        <h2 class="text-center">LANDSCAPERS</h2>
    </div>

    <table class="table table-sm table-striped table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Adress</th>
                <th>Age</th>
                <th>Gmail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    </div>
</body>
</html>



            <?php while ($row_role = $role->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row_role['ID']; ?></td>
                    <td><?= $row_role['username']; ?></td>
                    <td><?= $row_role['adress']; ?></td>
                    <td><?= $row_role['age']; ?></td>
                    <td><?= $row_role['email']; ?></td>
                    <td>
                <a href="#" class="btn btn-sm btn-warning edit" data-bs-toggle="modal" data-bs-target="#editModalUser" data-bs-id="<?= $row_route['ID'] ?>"><i class="fa-solid fa-pen-to-square"></i>  Edit</a>
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

    <?php include './UserEdit/editModalUser.php'; ?>

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