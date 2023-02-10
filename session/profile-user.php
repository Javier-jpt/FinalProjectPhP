<?php
include "../connection.php";

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LandScapers</title>
</head>
<body>
<body>
    
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="../assets/Mi_proyecto.png"alt="Logo" width="150" height="150" class="d-inline-block align-text-top" onclick="window.location.href='../indexuser.php'">
                <h2 class="position-absolute top-50 start-50 translate-middle text-dark">LandScapers</h2>
                </a>
                <div>
                    <img src="<?php echo $user['avatar_url']; ?>" alt="Profile Avatar" class="profile__picture">
                </div>
            </div>
        </nav>
    </header>

    <main class="profile-main">

	<h1>My Profile</h1><br>
<p>Username: <?php echo $username; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Adress: <?php echo $adress; ?></p>
<p>Password: <?php echo $password; ?></p>


<button id="btn_top" class="link-secondary" onclick="window.location.href='logout.php'">Logout</button>

</main>
</body>

<footer>
        <p>LandScapers © 2023 @ <a class="link" href="https://assemblerinstitute.com/?utm_medium=paidsearch&utm_source=google.com&utm_campaign=branding&gclid=CjwKCAiArY2fBhB9EiwAWqHK6sAVZAJi6gNirAygoFPY8NRJJLR-JgCdfZu7ZBZdUynIqii66lt4ahoCo5MQAvD_BwE">Assembler Institute of Technology</a></p>
</footer>
</html>
