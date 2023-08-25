<?php
include ("../model/mydb.php");
session_start();

$selected="";
$email=$_SESSION["emaila"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->viewUser("admin1", $email, $conobj);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
{
            $name= $row["Name"];
        
            $email= $row["Email"];
          
            

}

}
if(isset($_REQUEST["update"]))
{
   
    if($_FILES["image"]["name"]!="")
    {
        echo $_FILES["image"]["name"];
        $file="../uploads/".$email.".jpg";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);
    }
$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->updateUser("admin", $conobj, $_REQUEST["name"], 
$_REQUEST["name"], 
$_REQUEST["password"],
$_REQUEST["gender"],
 $file, $email);
}






?>