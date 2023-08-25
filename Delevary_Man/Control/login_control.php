<?php
session_start();
include "../model/mydb.php";
$not="";
$not1="";
if(!empty($_SESSION["email"]))
{
    header("Location: ../view/profile.php");
}
if(isset($_REQUEST["login"]))
{
    $match=0;
    if(empty($_REQUEST["email1"]))
    {
        $not= "*Please enter your email address";
    }
    elseif(empty($_REQUEST["password"]))
    {
        $not1="*Please enter your password";
    }
    else{
        $mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->checkUser("delivary_man",$_REQUEST["email1"], $_REQUEST["password"],
        $conobj);  
        if($result->num_rows >0)
        {
            $_SESSION["email"]=$_REQUEST["email1"];
            header("Location: ../view/profile.php");
        } 
        else
        {
            $not1= "*Please correct email and password";
        }

}

}
?>