
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <main>

    <div class="d-flex justify-content-center align-items-center vh-100">
        

        <form class="shadow w-450 p-3" action="signup.php" method="post">
            <h5 class="display-5 text-center fs-0">Create Account</h5><br>
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" value="<?php (isset($_GET['username']))? $_GET['username']:""; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Adress</label>
                <input type="text" class="form-control" name="adress" value="<?php (isset($_GET['adress']))? $_GET['adress']:""; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" name="age" value="<?php (isset($_GET['age']))? $_GET['age']:""; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php (isset($_GET['email']))? $_GET['email']:""; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="login.php" class="link-secondary">Login</a>
        </form>

    </div>


    </main>
    
    <footer>
        <p>LandScapers © 2023</p>
    </footer>


</html>