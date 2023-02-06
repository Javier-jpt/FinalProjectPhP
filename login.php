<?php

session_start(); 

if(isset($_SESSION['role'])){
    switch($_SESSION['role']){
        case 1:
            header('Location: index.php');
        break;

        case 2:
            header('Location: profile.php');
        break;

        default:
    }
}

if(isset($_POST['username']) && 
    isset($_POST['password'])){

        include "connection.php";

    $username = $_POST['username'];
    $password= $_POST['password'];

    $data = "username=".$username;

    if (empty($username)){
        $em = "User Name is required";
        header("Location: login-index.php?error=$em");
        exit;
    } else if (empty($password)){
        $em = "Password is required";
        header("Location: login-index.php?error=$em");
        exit;
    } else {

    
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $password]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            $Username = $user['username'];
            $Password = $user['password'];
            $role = $user['role_id'];
            
            if($username === $Username) {
                if($password === $Password){
					$_SESSION['username'] = $username;
					$_SESSION['email'] = $email;
                    $_SESSION['role'] = $role;
                    
                    switch($_SESSION['role']){
                        case 1:
                            header('Location: index.php');
                        break;
                
                        case 2:
                            header('Location: profile.php');
                        break;
                
                        default:
                    }

                }else {
                $em = "Incorrect password";
                header("Location: login-index.php?error=$em");
                exit;
            } 
            }else {
                $em = "Incorrect User name";
                header("Location: login-index.php?error=$em");
                exit;
            } 

        }else {

            $em = "Incorrect User name or password";
            header("Location: login-index.php?error=$em");
            exit;

        }  
    }

}else{
    header("Location: login-index.php?error=error");
    exit;
}


?>