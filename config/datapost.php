<?php

$conn = new mysqli("localhost", "root", "", "landscapers");

if($conn->connect_error) {
    die("Error conexion" . $conn->connect_error);
}

?>