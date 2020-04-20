<?php 

Class dbObj{

    var $servernmae = "localhost"; 
    var $username = "root"; 
    var $password = "";
    var $dbname = "db_test"; var $conn;
    function getConnstring(){
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or
        die ("Connection failed".mysqli_connect_error());
        
        if (mysqli_connect_errno()) {
            printf("Cinnect failed: %s\n", mysqli_connect_error());
            exit();
        }else{
            $this->conn = $con;
        }
        return $this->conn;
    }
}

?>