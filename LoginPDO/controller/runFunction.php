<?php
    $usernameAndEmail = $_GET['UElogin'];
    $password = MD5($_GET['Password']);
    include_once '../model/ConDB.php';
    include_once '../model/Loginweb.php';
    $obj_name = new Login();
    $rs = $obj_name->getLogin($usernameAndEmail,$password);
    $jsonCode = $rs;
    $jsonDecode = json_decode($jsonCode, true);

    include "../view/user.php"
?>