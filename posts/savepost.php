<?php

require_once '../config/datapost.php';

$title = $conn->real_escape_string($_POST['title']);
$content = $conn->real_escape_string($_POST['content']);
$route = $conn->real_escape_string($_POST['route']);

$sql = "INSERT INTO posts (title, content, id_route, timer) VALUES ('$title', '$content', $route, NOW())";

header('Location: ../indexuser1.php');