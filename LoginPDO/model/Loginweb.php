<?php
class Login{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getLogin($usernameAndEmail,$password) 
    {
        $sql = "SELECT * FROM loginwww where username = '$usernameAndEmail' || email = '$usernameAndEmail' && password = '$password'";
        $check_data = $this->ConDB->prepare($sql);
        $check_data->execute();
        $row = $check_data->fetch(PDO::FETCH_ASSOC);
        if ($check_data->rowCount() > 0) {
            $data = json_encode($row);
            return $data;
        } else {
            include "alertInput.php";
        }       

    }
}
?>