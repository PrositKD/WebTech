<?php
session_start();
include ("../model/mydb.php");

$emptyfname="";
$emptylname="";
$emptyhouse="";
$emptyroad="";
$emptydistrict="";
$emptycity="";
$emptyphn="";
$emptygender="";
$emptyage="";

$selected="";
$email=$_SESSION["email1"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->getUserInfo("customer", $email, $conobj);

if($result->num_rows>0)
{
    
    while($row = $result->fetch_assoc())
{
    $fname=$row["fname"];
    $lname=$row["lname"];
    $house=$row["house"];
    $road=$row["road"];
    $district=$row["district"];
    $city=$row["city"];
    $phn=$row["phn"];
    $gender=$row["gender"];
    $age=$row["age"];
    //$pass=$row["pass"];
    

}

}
if(isset($_REQUEST["update"]))
{
    $haserror=0;

$fname=$_REQUEST["fname"];

if(!preg_match('/^[A-Za-z_]+$/',$fname))
{
    $emptyfname= " First name should be a word";
    $haserror=1;
}

$lname=$_REQUEST["lname"];
if(!preg_match('/^[A-Za-z_]+$/',$lname))
{
    $emptylname=" Last name should be a word";
    $haserror=1;
}

$house=$_REQUEST["house"];

if(empty($house))
{
    $emptyhouse=" House name not found";
    $haserror=1;
}

$house=$_REQUEST["house"];

if(empty($house))
{
    $emptyhouse=" House name not found";
    $haserror=1;
}

$road=$_REQUEST["road"];

if(empty($road))
{
    $emptyroad= " Road number not found";
    $haserror=1;
}

$district=$_REQUEST["district"];

if(empty($district))
{
    $emptydistrict=" District not found";
    $haserror=1;
}

$city=$_REQUEST["city"];

if(empty($city))
{
    $emptycity=" City not found";
    $haserror=1;
}

$phn=$_REQUEST["phn"];

if(!preg_match('/^[0-9]{11}+$/', $phn))
{
    $emptyphn=" Phone number must be 11 digit";
    $haserror=1;
}
$age=$_REQUEST["age"];
if(empty($age))
{
    $emptyage=" Age not found";
    $haserror=1;
}

if($haserror==0)
{
    
$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->updateUser("customer", $conobj, $_REQUEST["fname"], 
$_REQUEST["lname"],$_REQUEST["house"],$_REQUEST["road"],$_REQUEST["district"],
$_REQUEST["city"],$_REQUEST["phn"],$_REQUEST["gender"],$_REQUEST["age"],

$email);
echo "update";
}


}



?>