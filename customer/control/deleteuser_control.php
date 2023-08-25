<?php
include ("../model/mydb.php");

session_start();
$email=$_SESSION["email1"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->deleteUser("customer", $conobj, $email);

if($result==TRUE)

{
    session_destroy();

    header("Location: ../view/login.php");
}
else
{
    echo "can't delete";
}




?>