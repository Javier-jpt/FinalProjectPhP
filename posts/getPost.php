<?php

require_once '../config/datapost.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT ID, title, content, id_route FROM posts WHERE id=$id LIMIT 1";
$result = $conn->query($sql);
$rows = $result->num_rows;

$posts = [];

if ($rows > 0) {
    $posts = $result->fetch_array();
}

echo json_encode($posts, JSON_UNESCAPED_UNICODE);

?>