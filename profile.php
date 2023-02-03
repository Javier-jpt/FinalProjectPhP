
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


	<h1>Profile Page</h1>
<form>
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" disabled value="john_doe"><br><br>

	<label for="email">Email:</label>
	<input type="email" id="email" name="email" disabled value="john_doe@example.com"><br><br>

	<label for="bio">Bio:</label>
	<textarea id="bio" name="bio" rows="4" cols="50" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, massa et placerat venenatis, nisi dui laoreet dui, eu luctus eros est eget nisl.</textarea><br><br>

    <label for="email">Password:</label>
	<input type="password" id="password" name="password" disabled value="example"><br><br>

</form>

</body>
</html>
