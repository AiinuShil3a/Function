<?php
class Login{

    public function getLogin() 
    {
        $filename = '../assets/json//loginJSON.json';
        $dataJSON = file_get_contents($filename);
        $decode = json_decode($dataJSON);
        if($dataJSON){
            return $decode;
        }else{
            include "alertInput.php";
        }
        
    }
}
?>