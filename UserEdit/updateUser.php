<?php

require '../config/datapost.php';

$id = $conn->real_escape_string($_POST['id']);
$username = $conn->real_escape_string($_POST['username']);
$adress = $conn->real_escape_string($_POST['adress']);
$role = $conn->real_escape_string($_POST['role_id']);


$sql = "UPDATE user SET username ='$username', adress ='$adress', role_id =$role WHERE id = $id";
if ($conn->query($sql)) {
}

header('Location: ../indexuser1.php');

?>