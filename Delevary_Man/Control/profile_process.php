<?php
session_start();
include "../model/mydb.php";
$fname=$lname=$email=$phot1="";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}
$mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->viewUser("delivary_man",$_SESSION["email"],$conobj);  
        if($result->num_rows >0)
        { while($row=$result->fetch_assoc()){
            $fname= $row["Name"];
            $lname= $row["Gender"];
            $email= $row["Email"];
            $phot1= $row["Photo"];
        }
        }

        





// $jsondata = file_get_contents("../data/jsondata.json");
// $phpdata= json_decode($jsondata);
// foreach($phpdata as $myobj)
// {
//     if($_SESSION["email"]==$myobj->email)
//     {
//         $fname= $myobj->Name;
//         $lname= $myobj->Gender;
//         $email= $myobj->email;
//         $phot1= $myobj->Photo;
//     }
// }


?>