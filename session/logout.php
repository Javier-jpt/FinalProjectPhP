<?php

session_start();

unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['password']);

session_destroy();


$em = "You are log out";
header("Location: login-index.php?error=$em");


?>