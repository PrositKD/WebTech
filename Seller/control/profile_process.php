<?php
session_start();
$fname=$email="";
if(empty($_SESSION["emails"]))
{
    header("Location: ../view/Login.php");
}

$jsondata = file_get_contents("../data/jsondata.json");
$phpdata= json_decode($jsondata);
foreach($phpdata as $myobj)
{
    if($_SESSION["emails"]==$myobj->Email)
    {
        $fname= $myobj->Name."<br>";
        $email= $myobj->Email."<br>";
        $phot1= $myobj->file;
        $shop=$myobj->ShopName;
    }
}


?>