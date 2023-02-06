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

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id FROM user");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $id = $row["id"];
        // Use the fetched id to generate a random avatar URL
        $avatar_url = "https://api.dicebear.com/5.x/bottts-neutral/svg?seed=" . $id;
        $stmt = $conn->prepare("UPDATE user SET avatar_url = ? WHERE id = ?");
        $stmt->execute([$avatar_url, $id]);

    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
    <link href="profile.css" rel="stylesheet">
    <script src="avatar.js"></script>
</head>
<body>

    <div>
  
   <img src="<?php echo $user['avatar_url']; ?>" alt="Profile Avatar" class="profile__picture">

        <!-- <img src="./assets/redPanda.png" alt="panda" class="profile__picture"> -->
    </div>


	<h1>My Profile</h1>

	
	<h2>User Information</h2>

<p>Username: <?php echo $username; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Password: <?php echo $password; ?></p>


</body>
</html>
