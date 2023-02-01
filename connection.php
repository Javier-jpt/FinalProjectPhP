<?php

class Connection {

    public $con;
    public function connection() {
        $this->con = mysqli_connect("localhost", "root", "", "landscapers");
    }
}


?>