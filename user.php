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

    public function update() {
        $this->connection();
        $pre = mysqli_prepare($this->con, "UPDATE user Set email=? WHERE ID=?");
        $pre->bind_param("si", $this->email,$this->ID);
        $pre->execute();
    }

    // DELETE

    public function delete() {
        $this->connection();
        $pre = mysqli_prepare($this->con, "DELETE FROM user Where ID = ?");
        $pre->bind_param("i", $this->ID);
        $pre->execute();
    }


    // How to obtain ID (PK)
    public static function getByID($ID) {
        $connection = new Connection();
        $connection->connection();
        $pre = mysqli_prepare($connection->con, "SELECT * FROM user WHERE ID = ?");
        $pre->bind_param("i",$ID);
        $pre->execute();
        $res = $pre->get_result();

        return $res->fetch_object(User::class);
    }
}



    





?>