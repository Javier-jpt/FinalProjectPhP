<?php

include_once "user.php";

/* $user = new User();
$user->username = "Mikie";
$user->adress = "The Street";
$user->age = 22;
$user->email = "mikie22@gmail.com";
$user->password = "Langui";
$user->create(); */


    // Update

$user = User::getByID(34);
$user->email = "mikiiiie@gmail.com";
$user->update();

    // Delete

    // Read

$users = User::all();

?>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Adress</th>
            <th>Age</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <th><?php echo $user->username;?></th>
                <th><?php echo $user->adress;?></th>
                <th><?php echo $user->age;?></th>
                <th><?php echo $user->email;?></th>
                <th><?php echo $user->password;?></th>
            </tr>
            <?php } ?>
    </tbody>
</table>