<?php
include ("../model/mydb.php");


$email=$_REQUEST["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->deleteUser("customer", $conobj, $email);

if($result==TRUE)
{
    header("Location: ../view/showalluser.php");
}
else
{
    echo "can't delete";
}




?>