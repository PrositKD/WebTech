<?php
session_start();
include "../model/mydb.php";
if(!empty($_SESSION["emaila"]))
{
    header("Location: ../view/profile.php");
}
if(isset($_REQUEST["login"]))
{
    $match=0;
    if(empty($_REQUEST["emaila"]))
    {
        echo "Please enter your email address";
    }
    elseif(empty($_REQUEST["password"]))
    {
        echo "Please enter your password";
    }
    else{
        $mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->checkUser("Admin1",$_REQUEST["emaila"], $_REQUEST["password"],
        $conobj);  
        if($result->num_rows >0)
        { 
            $_SESSION["emaila"]=$_REQUEST["emaila"];
            header("Location: ../view/profile.php");
        } 
        else
        {
            echo "Please correct email and password";
        }
//         $filedata=file_get_contents("../data/admin.json");
//         $phpobj=json_decode($filedata);
//         foreach($phpobj as $myobj)
//         {
// if($myobj->email==$_REQUEST["emaila"] && $myobj->password==$_REQUEST["password"])
// {
   
//     $match=1;
// }
//         }
//         if($match==1)
//         {
//             $_SESSION["emaila"]=$_REQUEST["emaila"];
//           header("Location: ../view/profile.php");
//         }
//         else{
//             echo "login failed";
//         }

    }

}



?>