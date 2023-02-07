<?php

require '../config/datapost.php';

$id = $conn->real_escape_string($_POST['id']);
$title = $conn->real_escape_string($_POST['title']);
$content = $conn->real_escape_string($_POST['content']);
$route = $conn->real_escape_string($_POST['route']);


$sql = "UPDATE posts SET title ='$title', content ='$content', id_route =$route WHERE id = $id";
if ($conn->query($sql)) {
}

header('Location: ../indexuser1.php');

?>