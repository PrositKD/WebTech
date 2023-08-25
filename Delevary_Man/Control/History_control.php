<?php
include ("../model/mydb.php");


$email=$_REQUEST["email1"];



if(!empty($done=$_REQUEST["done"]))
{  
    
    $ckk="doneBy-".$email;

$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->acceptUser("delevary_items",$ckk, $conobj, $done);

if($result==TRUE)
{ echo "Your order is accepted";
    header("Location: ../view/pickedup.php");
    echo "Your order is accepted";
}


}
if(!empty($reject=$_REQUEST["reject"]))
{  
    
    $ckk1="RejectBy-".$email;

$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->acceptUser("delevary_items",$ckk1, $conobj, $reject);

if($result==TRUE)
{ echo "Your order is accepted";
    header("Location: ../view/pickedup.php");
    echo "Your order is accepted";
}
else
{
    echo "can't pickedup";
}

}


?>