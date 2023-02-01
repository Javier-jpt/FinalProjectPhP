<?php

include_once "connection.php";

class User extends Connection {

    public $ID;
    public $username;
    public $adress;
    public $age;
    public $email;
    public $password;

// CRUD 

    // CREATE

    public function create() {
        $this->connection();
        $pre = mysqli_prepare($this->con, "INSERT INTO user (username,adress,age,email,password) VALUES (?,?,?,?,?)");
        $pre->bind_param("ssiss", $this->username, $this->adress, $this->age, $this->email, $this->password);
        $pre->execute();
        $res = $pre->get_result();
    }

    // READ

    public static function all() {

        $connection = new Connection();
        $connection->connection();
        $pre = mysqli_prepare($connection->con, "SELECT * FROM user");
        $pre->execute();
        $res = $pre->get_result();
        $users = [];
        while ($user = $res->fetch_object(User::class))
            array_push($users, $user);

        return $users;
    }

    // UPDATE


    // DELETE

    








}



    





?>