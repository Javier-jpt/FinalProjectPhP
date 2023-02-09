<?php

require './config/datapost.php';

$sqlroles = "SELECT u.ID, u.username, u.adress, u.age, u.email, r.role AS roles FROM user AS u INNER JOIN roles AS r ON u.role_id=r.ID";
$role = $conn->query($sqlroles);

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
                <th>RoleID</th>
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
                    <td><?= $row_role['roles']; ?></td>
                    <td>
                <a href="#" class="btn btn-sm btn-warning edit" data-bs-toggle="modal" data-bs-target="#editModalUser" data-bs-id="<?= $row_role['ID'] ?>"><i class="fa-solid fa-pen-to-square"></i>  Edit</a>
                <a href="#" class="btn btn-sm btn-danger delete" data-bs-id="<?= $row_role['ID'] ?>"><i class="fa-solid fa-trash"></i>  Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    <?php
    $sqlrole = "SELECT id, role FROM roles";
    $role = $conn->query($sqlrole);
    ?>
    <?php $role->data_seek(0); ?>

    <?php include './UserEdit/editModalUser.php'; ?>

    <script>

        let editModal = document.getElementById('editModalUser')

        editModal.addEventListener('shown.bs.modal', event=> {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editModal.querySelector('.modal-body #id')
            let inputUsername = editModal.querySelector('.modal-body #username')
            let inputAdress = editModal.querySelector('.modal-body #adress')
            let inputRole = editModal.querySelector('.modal-body #role')
            let inputAge = editModal.querySelector('.modal-body #age')
            let inputEmail = editModal.querySelector('.modal-body #email')
            let url = "./UserEdit/getUser.php"
            let formData = new FormData()
            formData.append('ID',id)

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {

                inputId.value = data.ID
                inputUsername.value = data.username
                inputAdress.value = data.adress
                inputRole.value = data.role
                inputAge.value = data.age
                inputEmail.value = data.email

        }).catch(err => console.log(err))

        })
    </script>
<script>
    let deleteButtons = document.querySelectorAll('.delete')

    deleteButtons.forEach(deleteButton => {
        deleteButton.addEventListener('click', event => {
            event.preventDefault()
            let id = deleteButton.getAttribute('data-bs-id')
            let result = confirm(`Are you sure you want to delete User with id ${id}?`)

            if (result) {
                let xhr = new XMLHttpRequest()
                xhr.open('DELETE', `./config/datauser.php?id=${id}`, true)
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