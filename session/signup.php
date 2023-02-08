<?php

session_start();


if(isset($_POST['username']) && 
    isset($_POST['adress']) && 
    isset($_POST['age']) && 
    isset($_POST['email']) && 
    isset($_POST['password'])){

        include "connection.php";

    $username = $_POST['username'];
    $adress= $_POST['adress'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $role= 2;

    $data = "username=".$username."adress=".$adress."age=".$age."email=".$email;

    if (empty($username)){
        $em = "User Name is required";
        header("Location: register.php?error=$em&$data");
        exit;
    } else if (empty($adress)){
        $em = "Adress is required";
        header("Location: register.php?error=$em&$data");
        exit;
    } else if (empty($age)){
        $em = "Age is required";
        header("Location: register.php?error=$e&$datam");
        exit;
    } else if (empty($email)){
        $em = "Email is required";
        header("Location: register.php?error=$em&$data");
        exit;
    } else if (empty($password)){
        $em = "Password is required";
        header("Location: register.php?error=$em");
        exit;
    } else {

        // $password = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO user(username, adress, age, email, password, role_id)
                VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $adress, $age, $email, $password, $role]);

        header("Location: register.php?success=Your account has been created successfully");
    exit;
    
    }

}else{
    header("Location: register.php?error=error");
    exit;
}





?>
