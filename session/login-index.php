<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LandScapers</title>
</head>
<body>

<header>
<nav class="navbar bg-light">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="../assets/Mi_proyecto.png"alt="Logo" width="150" height="150" class="d-inline-block align-text-top" onclick="window.location.href='../indexuser.php'">
    <h2 class="position-absolute top-50 start-50 translate-middle text-dark">LandScapers</h2>
    </a>
</div>
</nav>
    </header>

    <main>

    <div id="login-bg" class="d-flex justify-content-center align-items-center vh-100">
        

        <form class="shadow w-450 p-3 bg-light.bg-gradient" action="login.php" method="post">
            <h4 class="display-4 text-center fs-0">Log In</h4><br>
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
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Log In</button>
            <a href="register.php" class="link-secondary">Sign Up</a>
        </form>

    </div>


    </main>
    <footer>
        <p>LandScapers © 2023 @ <a class="link" href="https://assemblerinstitute.com/?utm_medium=paidsearch&utm_source=google.com&utm_campaign=branding&gclid=CjwKCAiArY2fBhB9EiwAWqHK6sAVZAJi6gNirAygoFPY8NRJJLR-JgCdfZu7ZBZdUynIqii66lt4ahoCo5MQAvD_BwE">Assembler Institute of Technology</a></p>
    </footer>

</html>