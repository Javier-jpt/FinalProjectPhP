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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
    <link href="profile.css" rel="stylesheet">
</head>
<body>
    <div>
        <img src="./assets/redPanda.png" alt="panda" class="profile__picture">
    </div>


	<h1>My Profile</h1>

	
	<h2>User Information</h2>

<p>Username: <?php echo $username; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Password: <?php echo $password; ?></p>


<a href="logout.php" class="link-secondary">Log Out</a>


</body>
</html>
