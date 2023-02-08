<?php


if (!isset($_POST['hidden'])){
    header('Location: index.php');
}

include "connection.php";

$id2 = $_POST['id2'];
$username2 = $_POST['username2'];
$adress2 = $_POST['adress2'];
$email2 = $_POST['email2'];
$password2 = $_POST['password2'];

$stnt = $conn->prepare("UPDATE user SET username = ?, adress = ?, email = ?, password = ? WHERE `ID`= ?;");
$result = $stnt->execute([$username2,$adress2, $email2, $password2,$id2]);

if($result === TRUE) {
    header("Location: login-index.php?success=Your profile has been edited successfully");
} else {
    echo "error";
}


?>