<?php

include_once "user.php";

?>
<!--     // Create FUNCIONA

    // Update FUNCIONA

    // Delete FUNCIONA

    // Read FUNCIONA


 $users = User::all();


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
                <td><?php echo $user->Username;?></td>
                <td><?php echo $user->Adress;?></td>
                <td><?php echo $user->Age;?></td>
                <td><?php echo $user->Email;?></td>
                <td><?php echo $user->Password;?></td>
            </tr>
            <?php } ?>
    </tbody>
</table>  -->