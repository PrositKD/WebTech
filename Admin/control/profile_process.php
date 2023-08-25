<?php
session_start();
include "../model/mydb.php";
$name=$email="";
if(empty($_SESSION["emaila"]))
{
    header("Location:../view/login.php");
}
$mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->viewUser("Admin1",$_SESSION["emaila"],$conobj);  
        if($result->num_rows >0)
        { while($row=$result->fetch_assoc()){
            $name= $row["Name"];
        
            $email= $row["Email"];
            
        }
}


?>