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
	<title>Profile Page</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>


    <header>
        <navbar class="navbarheader">
            <!-- cambiar ruta index admin -->
            <div class="navbarlogo">
                <a class="register" onclick="window.location.href='index.php'"><img class="navbarimg" src="./assets/Mi_proyecto.png"></a>
            </div> 
            <p class="navbartitle">Landscapers</p>
            <div>
                <img src="./assets/redPanda.png" alt="panda" class="profile__picture">
            </div>
        </navbar>
    </header>

<main class="profile-main">


	<h1>My Profile</h1>

	
	<h2>User Information</h2>

<p>Username: <?php echo $username; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Adress: <?php echo $adress; ?></p>
<p>Password: <?php echo $password; ?></p>


<a href="/admin/edit-profile.php?id=<?php echo $user['ID'];?>" class="link-secondary">Edit</a>
<a href="/admin/delete-profile.php?id=<?php echo $user['ID'];?>" class="link-secondary">Delete</a>


<a href="logout.php" class="link-secondary">Log Out</a>
</main>  

</body>

<footer>
        <p>LandScapers © 2023</p>
</footer>

</html>
