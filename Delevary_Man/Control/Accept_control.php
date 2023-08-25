<?php
include ("../model/mydb.php");


$email=$_REQUEST["email"];
$email1=$_REQUEST["email1"];
echo $email;


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->acceptUser("delevary_items",$email1, $conobj, $email);

if($result==TRUE)
{ echo "Your order is accepted";
    header("Location: ../view/profile.php");
    echo "Your order is accepted";
}
else
{
    echo "can't pickedup";
}




?>