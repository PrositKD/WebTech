
<?php
session_start();
include("../model/mydb.php");

if(!empty($_SESSION["email1"]))
{
    header("Location: ../view/profile.php");
}
if(isset($_REQUEST["login"]))
{
    $match=0;
    if(empty($_REQUEST["email1"]))
    {
        echo "Please enter your email address";
    }
    elseif(empty($_REQUEST["pass"]))
    {
        echo "Please enter your password";
    }
    else{

        $mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->checkUser("customer",$_REQUEST["email1"], $_REQUEST["pass"],
        $conobj);  
        if($result->num_rows >0)
        {
           $_SESSION["email1"]=$_REQUEST["email1"];
           header("Location: ../view/profile.php");
           echo "dukse";
        } 
        else
        {
            echo "Please correct email and password";
        }
//         $filedata=file_get_contents("../data/admin.json");
//         $phpobj=json_decode($filedata);
//         foreach($phpobj as $myobj)
//         {
// if($myobj->email==$_REQUEST["email1"] && $myobj->cpass==$_REQUEST["pass"])
// {
   
//     $match=1;
// }
//         }
//         if($match==1)
//         {
//             $_SESSION["email1"]=$_REQUEST["email1"];
//            header("Location: ../view/profile.php");
//         }
//         else{
//             echo "Password or Email incorrect";
//         }

    }

}


?>