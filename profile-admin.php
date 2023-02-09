<?php
include "connection.php";

session_start();

$username = $_SESSION['username'];
$_SESSION['username'] = $username;


$stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();


$username = $user['username'];
$email = $user['email'];
$password = $user['password'];
$adress = $user['adress'];
?>


<!DOCTYPE html>
<html>
    
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="text/css" href=https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap%27>
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

    <form class="shadow w-450 p-3">
            <h4 class="display-4 text-center fs-0">User information</h4><br>
            <div class="mb-3">
                <label class="form-label">User Name:</label>
                <input class="input-information" readonly onmousedown="return false;" value="<?php echo $username; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">adress</label>
                <input class="input-information" readonly onmousedown="return false;" value="<?php echo $adress; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">User Email</label>
                <input class="input-information" class="input-information" readonly onmousedown="return false;" value="<?php echo $email; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="input-information" type ="password" readonly onmousedown="return false;" value="<?php echo $password;?>">
            </div>
        </form>


<a href="edit-profile.php?id=<?php echo $user['ID'];?>" class="link-secondary">Edit</a>
<a href="delete-profile.php?id=<?php echo $user['ID'];?>" class="link-secondary">Delete</a>


<a href="logout.php" class="link-secondary">Log Out</a>
</main>  

</body>

<footer>
        <p>LandScapers © 2023</p>
</footer>

</html>
