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
        $sql = "SELECT * FROM loginwww where username = '$usernameAndEmail' && password = '$password' || email = '$usernameAndEmail' && password = '$password'" ;
        $check_data = $this->ConDB->prepare($sql);
        $check_data->execute();
        $row = $check_data->fetch(PDO::FETCH_ASSOC);
        if ($check_data->rowCount() > 0) {
            $data = json_encode($row);
            return $data;
        } else {
            include "alertInput.js";
        }       

    }

    public function addUser($Email , $User , $PassMD5) // ADD NO ARRAY
    {
        $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)
                VALUES ('', '$Email' ,'$User', '$PassMD5')";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            include "alertInputSuccess.js";
        }else {
            include "alertInput.js";
        }
    }

    public function addUserArray($data_register) // ADD BY ARRAY 1
    {
        $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)";
        $sql .= " VALUES ('', :EMAIL, :USERNAME, :PASSWORD);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_register)){
            include "alertInputSuccess.js";
        }else {
            include "alertInput.js";
        }
    }

    public function addUserArray2($register) // ADD NO ARRAY 2
    {
        $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)
                VALUES ('', '$register[EMAIL]' ,'$register[USERNAME]', '$register[PASSWORD]')";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            include "alertInputSuccess.js";
        }else {
            include "alertInput.js";
        }
    }

    public function addUserArray3($register) // ADD BY ARRAY 3
    {
        $sql = "INSERT INTO `loginwww` (`id`, `email`, `username`, `password`)";
        $sql .= " VALUES ('', :EMAIL, :USERNAME, :PASSWORD);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($register)){
            include "alertInputSuccess.js";
        }else {
            include "alertInput.js";
        }
    }


}
?>