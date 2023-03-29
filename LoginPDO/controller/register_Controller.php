<?php 
  include_once "../model/ConDB.php";
  include_once "../model/Loginweb.php";

    $Email = $_POST['EmailName'];
    $User = $_POST['UsernameName'];
    $Pass = $_POST['PasswordName'];
    $PassMD5 = md5($Pass);

/*     $register = array();
    $register["EMAIL"]=$Email;
    $register["USERNAME"]=$User;
    $register["PASSWORD"]=$PassMD5; */

    $obj_name=new Login();
    $rs2= $obj_name->addUser($Email , $User , $PassMD5);
    
?>