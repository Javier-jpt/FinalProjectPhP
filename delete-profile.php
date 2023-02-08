<?php

if (!isset($_GET['id'])){
    exit();
}

$code = $_GET['id'];

include "connection.php";

$stnt = $conn->prepare("DELETE FROM user WHERE `ID` = ?;");
$result = $stnt->execute([$code]);

if($result === TRUE) {

    $em = "Your account has been deleted";
    header("Location: register.php?error=$em");
} else {
    echo "error";
}

?>