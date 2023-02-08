<?php

$conn = new mysqli("127.0.0.1", "root", "", "landscapers");

if($conn->connect_error) {
    die("Error conexion" . $conn->connect_error);
}