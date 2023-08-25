<?php
include "../model/mydb.php";
session_start();
$email=$_SESSION["email"];
$ckk="doneBy-".$email;
$ckk1="RejectBy-".$email;
$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->historyuser("delevary_items",$conobj,$ckk,$ckk1);


?>