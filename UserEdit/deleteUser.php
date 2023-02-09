<?php
require '../config/datapost.php';

if (isset($_POST['ID']) && is_numeric($_POST['ID'])) {
  $id = $conn->real_escape_string($_POST['ID']);

  $sql = "DELETE FROM posts WHERE ID = $id";

  if ($conn->query($sql)) {
    header('Location: ../indexusers.php');
  } else {
    // handle the error
  }
} else {
  // handle the error
}
?>