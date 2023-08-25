<?php
include("../model/mydb.php");
$emptyname="";

$emptyemail="";
$emptyphone="";
$emptydob="";
$emptynid="";
$emptyaddress="";
$emptypassword="";
$emptyconfirmpassword="";
$gn="";
$gender="";
session_start();
if(!empty($_SESSION["emaila"]))
{
    header("Location: ../control/logout.php");
}


if(isset($_REQUEST["submit"]))
{

$error=0;




$name=$_REQUEST["name"];

if(empty($name))
{
    $emptyname="Name not found";
    $error=1;
}
else if(!preg_match('/^[A-Za-z_ ]+$/', $name))
{
 $emptyname= " *please enter a valid name";
 $error=1;
}






$email=$_REQUEST["email"];

if(empty($email))
{
    $emptyemail="Email not found";
    $error=1;
}
else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
 $emptyemail= " *please enter a valid email address";
 $error=1;
}



$phone=$_REQUEST["phone"];

if(empty($phone))
{
    $emptyphone="Phone number not found";
    $error=1;
}
else if(!preg_match('/^[0-9]{11}+$/', $phone))
{
 $emptyphone= " *please enter a valid Phone number ";
 $error=1;
}

if(empty($_REQUEST["Gender"]))
{
 $gn=" *Gender is required";
 $error=1;
}




$date=$_REQUEST["date"];

if(empty($date))
{
    $emptydob="Please Enter Date";
    $error=1;
}



$NID=$_REQUEST["NID"];

if(empty($NID))
{
    $emptynid="NID Number not found";
    $error=1;
}
else if(!preg_match('/^[0-9]{16}+$/', $NID))
{
 $emptynid= " *please enter a valid NID 16 Digit number ";
 $error=1;
}


$address=$_REQUEST["address"];

if(empty($address))
{
    $emptyaddress="Address not found";
    $error=1;
}
$Password=$_REQUEST["Password"];
if(empty($Password))
{
    $emptypassword="Please Enter Password";
    $error=1;
}

else if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z]).{6}$/', $_REQUEST["Password"]))
{
 $emptypassword = " *please enter a password  upper class letter and number";
 $error=1;
}
$Password1=$_REQUEST["confirm"];
if($Password!=$Password1){

    $emptyconfirmpassword="password Not Matched";
    $error=1;
}

if($error==0)
 {$mydb= new MyDB();
    $conobj= $mydb->openCon();
    $result=$mydb->insertData("Admin1",$_REQUEST["name"],$_REQUEST["email"],
    $_REQUEST["phone"],$_REQUEST["Gender"],$_REQUEST["date"],$_REQUEST["NID"],
    $_REQUEST["address"],$_REQUEST["Password"],$conobj);
    if($result===TRUE)
    {
        echo "Account create Successfully";
    }
    else
    {
        echo "Error".$conobj->error;
    }


// $existingdata=file_get_contents("../data/admin.json");
// $phpdata=json_decode($existingdata);
//     $formdata=array(
//         "name"=>$_REQUEST["name"],
//         "address"=>$_REQUEST["address"],
//         "email"=>$_REQUEST["email"],
//         "phone"=>$_REQUEST["phone"],
//         "Gender"=>$_REQUEST["Gender"],
//         "dob"=>$_REQUEST["date"],
//         "nid"=>$_REQUEST["NID"],
//         "password"=>$_REQUEST["Password"],

//     );
//     $phpdata[]=$formdata;

//     $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

// if(file_put_contents("../data/admin.json",$jsondata))
// {
//     echo "Account Create Succesfully";
// }
// else{
//     echo "file written failed";
}

}







?>
