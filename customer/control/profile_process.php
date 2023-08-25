<?php
session_start();
include "../model/mydb.php";
$fname=$lname=$email="";
if(empty($_SESSION["email1"]))
{
    header("Location: ../view/login.php");
}

$mydb= new MyDB();
        $conobj=$mydb->openCon();
        $result=$mydb->viewUser("customer",$_SESSION["email1"],$conobj);  
        if($result->num_rows >0)
        { while($row=$result->fetch_assoc()){
            $fname= $row["fname"];
            $lname= $row["lname"];
            $house=$row["house"];
            $road=$row["road"];
            $district=$row["district"];
            $city=$row["city"];
            $phn=$row["phn"];
            $gender=$row["gender"];
            $age=$row["age"];
            $email=$row["email"];
            $pass=$row["pass"];
            
        }
        }

// $jsondata = file_get_contents("../data/admin.json");
// $phpdata= json_decode($jsondata);
// foreach($phpdata as $myobj)
// {
//     if($_SESSION["email"]==$myobj->email)
//     {
//         $fname= $myobj->fname."<br>";
//         $lname= $myobj->lname."<br>";
//         $email= $myobj->email."<br>";
//     }
// }


?>