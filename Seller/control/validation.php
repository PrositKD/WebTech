<?php
$n="";
$pn="";
$em="";
$passs="";
$mpass="";
$gn="";
$date1="";
$s="";
$stt="";
$ad="";
$up="";
session_start();
if(!empty($_SESSION["emails"]))
{
    header("Location: ../control/logout.php");
}

if(isset($_REQUEST["Submit"]))
{
  
$name=$_REQUEST["n"];

if(empty($name))
{
    $n=" *Name is required";
    $haserror=1;
}
else if(!preg_match('/^[A-Za-z_ ]+$/', $name))
{
    $n= " *please enter a valid name";
    $haserror=1;
}
else{
    $haserror=0;
    $_SESSION['name']=$name;
}
$phone=$_REQUEST["p"];
if(empty($phone))
{
    $pn= " *Phone number is required";
    $haserror=1;
}
else if(!preg_match('/^[0-9]{11}+$/', $phone))
{
    $pn= " *please enter a valid Phone number ";

    $haserror=1;

}
else{
    $_SESSION['phone']=$phone;
}
$email=$_REQUEST["e"];

if(empty($email))
{
    $em=" *Email is required";
    $haserror=1;
}
else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["e"]))
{
    $em= " *please enter a valid email address";
    $haserror=1;
}
else{
    $jsondata = file_get_contents("../data/jsondata.json");
$phpdata= json_decode($jsondata);
foreach($phpdata as $myobj)
{
    if($_SESSION["email"]==$myobj->Email)
    {
        $em= " *Already have anccount, try an another email ";
        $haserror=1;
    }
    else
    {
        $_SESSION['email']=$email;
        $haserror=0;
    }
}
    
}
$pass=$_REQUEST["pa"];

if(empty($pass))
{
    $passs =" *Password is required";
    $haserror=1;
}
else if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z]).{6}$/', $_REQUEST["pa"]))
{
    $passs = " *please enter a password of 6 which contain a upper class letter and number";
    $haserror=1;
}
$cpass=$_REQUEST["cpa"];

if($_REQUEST["cpa"]==$_REQUEST["pa"] && $_REQUEST["cpa"]!="" &&$_REQUEST["pa"]!="")
{
    $_SESSION['pass']=$pass;
}
else if($_REQUEST["cpa"]=="")
{
    $mpass=" *Confirm password is required";
}
else{
$mpass=" *Password not matched";
$haserror=1;
}

if(empty($_REQUEST["G"]))
{
    
    $gn=" *Gender is required";
    $haserror=1;
}
else{
    $gender=$_REQUEST["G"];
    $_SESSION['gender']=$gender;
}
$date = date('Y-m-d', strtotime($_REQUEST['date']));
if($date=="1970-01-01")
{
$date1=" *Select Date";
}
else if(isset($_REQUEST["date"]))
{
    $_SESSION['date']=$date;
}
else{
    $date1=" *Select Date";
    $haserror=1;
}
$ame=$_REQUEST["sn"];

if(empty($ame))
{
    $s= " *Shop name is required";
    $haserror=1;
}
else{
    $_SESSION['ame']= $ame;
}
$ne=$_REQUEST["st"];

if($ne=="----Select Option----")
{
    $stt=" *Select shop type";
    $haserror=1;
}
else{
    $_SESSION['ne']= $ne;
}
if(empty($_FILES["image"]["name"]))
{
    $up="*Upload a shop photo";
    $haserror=1;
}
else 
{
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_REQUEST["e"].".jpg");
}

if(empty($_REQUEST["ad"]))
{
    $ad=" *Address is required";
    $haserror=1;
}
else{
    $me=$_REQUEST["ad"];
    $_SESSION['me']=$me;
}
if($haserror==0)
{

    $otp=rand(100000,1000000);
    $_SESSION['otp']=$otp;
    $subject = "Tri garden security password";
    $body = $otp." is your OTP";
    $headers = "From: gardenaid29@gmail.com";
    
    mail($email, $subject, $body, $headers);
    header("Location: ../view/otp.php");
   
}
}

?>