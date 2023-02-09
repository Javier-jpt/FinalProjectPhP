<?php

require '../config/datauser.php';

$id = $conn->real_escape_string($_POST['id']);
$username = $conn->real_escape_string($_POST['username']);
$adress = $conn->real_escape_string($_POST['adress']);
$role = $conn->real_escape_string($_POST['role']);
$age = $conn->real_escape_string($_POST['age']);
$email = $conn->real_escape_string($_POST['email']);


$sql = "UPDATE user SET username ='$username', adress ='$adress', role_id ='$role', age=$age, email='$email'  WHERE id = $id";
if ($conn->query($sql)) {
}

header('Location: ../indexadmin.php');

?>