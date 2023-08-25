<?php
session_start();
$ip="";

if(!empty($_SESSION["emails"]))
{
    header("Location: ../view/profile.php");
}

if(isset($_REQUEST["login"]))
{

    if(empty($_REQUEST["emails"]))
    {
        $ma=" *Please enter your email address";
    }
    else if(empty($_REQUEST["password"]))
    {
        $ip= " *Please enter your password";
    }
    else

    {
        $filedata=file_get_contents("../data/jsondata.json");
        $phpobj=json_decode($filedata);
        foreach($phpobj as $myobj)
        {

            if($myobj->Email==$_REQUEST["emails"] && $myobj->Password==$_REQUEST["password"])
            {
                $_SESSION["emails"]=$_REQUEST["emails"];
                header("Location: ../view/profile.php");
    
            }
            else
            {
            $ip=" *Email or password is wrong";
            }
        }
        
    }
    
}



?>