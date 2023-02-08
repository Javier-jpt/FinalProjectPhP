<?php


if (!isset($_GET['id'])){
    header('Location: index.php');
}

include "connection.php";
$id = $_GET['id'];

$stnt = $conn->prepare("SELECT * FROM user WHERE `ID` = ?");
$stnt->execute([$id]);
$user = $stnt->fetch(PDO::FETCH_OBJ);
print_r($user);


?>


<!DOCTYPE html>
<html>
    
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="text/css" href=https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap%27> -->
    <title>LandScapers</title>
</head>


<body>
<header>
        <navbar class="navbarheader">
            <div class="navbarlogo">
                <a class="logo" onclick="window.location.href='index.php'"><img class="navbarimg" src="./assets/Mi_proyecto.png"></a>
                <p class="navbartitle">Landscapers</p>
            </div>
            
            <div class="navbar__button">
                <!-- <button class="log-in btn" onclick="window.location.href='login-index.php'">Log In</button>
                <button class="register btn" onclick="window.location.href='register.php'">SignUp</button>
                <button class="profile.. btn" onclick="window.location.href='profile.php'">profile</button> -->
            </div>
        </navbar>
    </header>

<main class="profile-main">


	<h1>My Profile</h1>


        <form class="shadow w-450 p-3" action="update-user.php" method="post">
            <h4 class="display-4 text-center fs-0">Edit</h4><br>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="username2" value="<?php echo $user->username;?>">
            </div>

            <div class="mb-3">
                <label class="form-label">adress</label>
                <input type="text" class="form-control" name="adress2" value="<?php echo $user->adress;?>">
            </div>

            <div class="mb-3">
                <label class="form-label">User Email</label>
                <input type="email" class="form-control" name="email2" value="<?php echo $user->email;?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password2" value="<?php echo $user->password;?>">
            </div>

            <input type="hidden" name="hidden">
            <input type="hidden" name="id2" value="<?php echo $user->ID;?>">

            <button type="submit" class="btn btn-primary" value="edit-profile">Submit</button>
        </form>


</main>  

</body>

<footer>
        <p>LandScapers © 2023</p>
</footer>

</html>
