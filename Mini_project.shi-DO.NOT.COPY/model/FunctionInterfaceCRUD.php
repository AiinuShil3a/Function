<?php
interface myFunctionInterfaceCRUD {
    public function addUserArray2($addStu);
}

Class functionthInterfaceCRUD implements myFunctionInterfaceCRUD {

    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function addUserArray2($addStu)
    {
        $sql = "INSERT INTO `studentsuser` (`id`, `name`, `lastname`, `age`, `file_img` , college_Years , major , NumberID , cardDeathDate , cno1 , cno2 , cno3 , cno4 , imgD1 , imgD2 , imgD3)
                VALUES ('', '$addStu[name]' ,'$addStu[lastname]', '$addStu[age]' ,'$addStu[file_img]', '$addStu[college_Years]' ,'$addStu[major]', '$addStu[NumberID]'
                ,'$addStu[cardDeathDate]', '$addStu[cno1]' ,'$addStu[cno2]', '$addStu[cno3]' ,'$addStu[cno4]' ,'$addStu[file_imgD1]','$addStu[file_imgD2]','$addStu[file_imgD3]')";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }
    
  }
?>