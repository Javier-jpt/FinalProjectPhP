<?php

require_once '../config/datauser.php';

$id = $conn->real_escape_string($_POST['ID']);

$sql = "SELECT ID, username, adress, role_id , age, email FROM user WHERE ID=$id LIMIT 1";
$result = $conn->query($sql);
$rows = $result->num_rows;

$roles = [];

if ($rows > 0) {
    $roles = $result->fetch_array();
}

echo json_encode($roles, JSON_UNESCAPED_UNICODE);

?>