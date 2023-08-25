<?php
session_start();
$otpE=""; 
$store=0;


if(!empty($_SESSION["emails"]))
{
    header("Location: ../view/profile.php");
}
if(isset($_REQUEST["Submit"]))
{

$name=$_REQUEST["otpBox"];

if(empty($name))
{
    $otpE=" *Write OTP first";

}
else if($_REQUEST["otpBox"]==$_SESSION['otp'])
{
    $existingdata=file_get_contents("../data/jsondata.json");
$phpdata=json_decode($existingdata);
    $formdata=array(
        "Name"=>$_SESSION['name'],
        "Phone number"=>$_SESSION['phone'],
        "Gender"=>$_SESSION['gender'],
        "Email"=>$_SESSION['email'],
        "Password"=>$_SESSION['pass'],
        "Date"=>$_SESSION['date'],
        "ShopName"=>$_SESSION['ame'],
        "Shop Type"=>$_SESSION['ne'],
        "Address"=>$_SESSION['me'],
        "file"=>"../uploads/".$_SESSION['email'].".jpg",
    );
    $phpdata[]=$formdata;

    $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);
    if(file_put_contents("../data/jsondata.json",$jsondata))
    {
        header("Location: ../view/profile.php");
    }
}
else{
    $otpE=" *OTP did not match";
}

}
if(isset($_GET['link']))
{
if ($_REQUEST['link']== '1')
{
    $otp=rand(100000,1000000);
    $_SESSION['otp']=$otp;
    $subject = "Tri garden security password";
    $body = $otp." is your OTP";
    $headers = "From: gardenaid29@gmail.com";
    
    mail($_SESSION['email'], $subject, $body, $headers);
}
header("Location: ../view/otp.php");
}

?>