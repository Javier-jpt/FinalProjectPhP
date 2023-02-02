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

class Connection {

    public $con;
    public function connection() {
        $this->con = mysqli_connect("localhost", "root", "", "landscapers");
    }
}


?>