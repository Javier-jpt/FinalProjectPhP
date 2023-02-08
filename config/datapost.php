<?php

$conn = new mysqli("localhost", "root", "", "landscapers");

if($conn->connect_error) {
    die("Error conexion" . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "DELETE FROM posts WHERE ID='$id'";

    if ($conn->query($query) === true) {
        http_response_code(200);
        exit();
    } else {
        http_response_code(500);
        echo 'Error: ' . $conn->error;
    }
}
?>