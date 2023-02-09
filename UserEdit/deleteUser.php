<?php
require '../config/datauser.php';

if (isset($_POST['ID']) && is_numeric($_POST['ID'])) {
  $id = $conn->real_escape_string($_POST['ID']);

  $sql = "DELETE FROM user WHERE ID = $id";

  if ($conn->query($sql)) {
    header('Location: ../indexusers.php');
  } else {
    // handle the error
  }
} else {
  // handle the error
}
?>