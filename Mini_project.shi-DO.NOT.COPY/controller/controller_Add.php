<?php
    include_once '../model/ConDB.php';
    include_once '../model/FunctionInterfaceCRUD.php';

    $names = $_POST['names'];
    $lastname = $_POST['lastname'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    $co1 = $_POST['co1'];
    $co2 = $_POST['co2'];
    $co3 = $_POST['co3'];
    $co4 = $_POST['co4'];
    $birthday = $_POST['birthday'];
    $DM = $_POST['DM'];
    $DY = $_POST['DY'];
    $no = $_POST['no'];

    $Deathdate = "$DM/$DY";
    
    $file_img = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../assets/img/studyCard" . $file_img;

    $file_imgD1 = $_FILES["uploadfileD1"]["name"];
    $tempnameD1 = $_FILES["uploadfileD1"]["tmp_name"];
    $folder = "../assets/img/studyCard" . $file_img;

    $file_imgD2 = $_FILES["uploadfileD2"]["name"];
    $tempnameD1 = $_FILES["uploadfileD2"]["tmp_name"];
    $folder = "../assets/img/studyCard" . $file_img;

    $file_imgD3 = $_FILES["uploadfileD3"]["name"];
    $tempnameD3 = $_FILES["uploadfileD3"]["tmp_name"];
    $folder = "../assets/img/studyCard" . $file_img;

    $addStu = array();
    $addStu["file_img"]=$file_img;
    $addStu["file_imgD1"]=$file_imgD1;
    $addStu["file_imgD2"]=$file_imgD2;
    $addStu["file_imgD3"]=$file_imgD3;
    $addStu["name"]=$names;
    $addStu["lastname"]=$lastname;
    $addStu["college_Years"]=$year;
    $addStu["major"]=$major;
    $addStu["age"]=$birthday;
    $addStu["NumberID"]=$no;
    $addStu["cardDeathDate"]=$Deathdate;
    $addStu["cno1"]=$co1;
    $addStu["cno2"]=$co2;
    $addStu["cno3"]=$co3;
    $addStu["cno4"]=$co4;

    $obj_name = new functionthInterfaceCRUD();
    $calyear = $obj_name->addUserArray2($addStu);

?>