<?php
include_once '../Model/ConDB.php';
include_once '../Model/Function.php';

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../data/" . $filename;

    $obj_name = new img();
    $rs2 = $obj_name->Image($filename);

    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      }
      else{
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3> Success to upload image!</h3>";
            include "../View/button.php";
        } else {
            echo "<h3> Failed to upload image!</h3>";
            include "../View/button.php";
        }
      }



}
