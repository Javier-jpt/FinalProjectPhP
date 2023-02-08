<?php

require '../config/datapost.php';

$title = $conn->real_escape_string($_POST['title']);
$content = $conn->real_escape_string($_POST['content']);
$route = $conn->real_escape_string($_POST['route']);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $route = $_POST['route'];
    $image = $_FILES['photo']['tmp_name'];
    $image_name = $_FILES['photo']['name'];
    $image_size = $_FILES['photo']['size'];
    $image_type = $_FILES['photo']['type'];

    // validate the uploaded image
    if ($image_size > 10000000) {
        echo "Error: Image size is too large. It should be less than 10 MB.";
        exit();
    }
    if ($image_type != 'photo/jpeg' && $image_type != 'photo/png') {
        echo "Error: Only JPEG and PNG images are allowed.";
        exit();
    }

    // convert the image to binary data
    $image_data = file_get_contents($image);

    // insert the post data into the database
    $sql = "INSERT INTO landscapers.posts (title, content, id_route, photo, timer) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssis', $title, $content, $route, $image_data);    
    if ($stmt->execute()) {
        echo "Post added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

header('Location: ../indexuser1.php');
