<?php
include "../model/mydb.php";
session_start();
$email=$_SESSION["email"];
$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->Requestuser("delevary_items",$conobj,$email);


?>