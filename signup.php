<?php


if(isset($_POST['userName']) && 
    isset($_POST['adress']) && 
    isset($_POST['age']) && 
    isset($_POST['email']) && 
    isset($_POST['password'])){

        include "connection.php";

    $username = $_POST['userName'];
    $adress= $_POST['adress'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    $data = "userName=".$username."adress=".$adress."age=".$age."email=".$email;

    if (empty($username)){
        $em = "User Name is required";
        header("Location: register.php?error=$em&$data");
        exit;
    } else if (empty($adress)){
        $em = "Adress is required";
        header("Location: register.php?error=$em");
        exit;
    } else if (empty($age)){
        $em = "Age is required";
        header("Location: register.php?error=$em");
        exit;
    } else if (empty($email)){
        $em = "Email is required";
        header("Location: register.php?error=$em");
        exit;
    } else if (empty($password)){
        $em = "Password is required";
        header("Location: register.php?error=$em");
        exit;
    } else {
    
        $sql = "INSERT INTO user(Username, Adress, Age, Email, Password)
                VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $adress, $age, $email, $password]);

        header("Location: index.php?success");
    exit;
    
    }

}else{
    header("Location: index.php?error=error");
    exit;
}





?>