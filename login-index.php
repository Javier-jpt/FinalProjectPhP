<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <header>
        <navbar class="navbarheader">
            <div class="navbarlogo">
                <a class="register" onclick="window.location.href='index.php'"><img class="navbarimg" src="./assets/Mi_proyecto.png"></a>
            </div>
            <p class="navbartitle">Landscapers</p>
            <div class="navbar__button">
                <button class="log-in" onclick="window.location.href='login-index.php'">Log In</button>
                <button class="register" onclick="window.location.href='register.php'">SignUp</button>
            </div>
        </navbar>
    </header>

    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="shadow w-450 p-3" 
                action="php/login.php" 
                method="post">

            <h4 class="display-4  fs-1">LOGIN</h4><br>
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>

            <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" 
                    class="form-control"
                    name="Username"
                    value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
            </div>

            <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" 
                class="form-control"
                name="Password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <a href="sign.php" class="link-secondary">Sign Up</a>
        </form>
    </div>
</body>
</html>
<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "landscapers";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}