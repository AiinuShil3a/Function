<?php
    $usernameAndEmail = $_GET['UElogin'];
    $password = $_GET['Password'];
    include_once '../model/Loginweb.php';
    $obj_name = new Login();
    $rs = $obj_name->getLogin();
    if($usernameAndEmail == $rs["0"]->email || $usernameAndEmail == $rs["0"]->username && $password == $rs["0"]->password){
        //print_r($rs);
        $id = $rs["0"]->id;
        $email = $rs["0"]->email;
        $username = $rs["0"]->username;
        $password = $rs["0"]->password;
        
        include "../view/user.php";
    }else if ($usernameAndEmail == $rs["1"]->email || $usernameAndEmail == $rs["1"]->username && $password == $rs["1"]->password){
        //print_r($rs);
        $id = $rs["1"]->id;
        $email = $rs["1"]->email;
        $username = $rs["1"]->username;
        $password = $rs["1"]->password;

        include "../view/user.php";
    }else{
        include "alertInput.php";
    }
    
    

    //echo $rs[$usernameAndEmail]->username;
    //echo $rs[$password]->password;

?>