<?php
include("../model/mydb.php");
$emptyfname="";
$emptylname="";
$emptyhouse="";
$emptyroad="";
$emptydistrict="";
$emptycity="";
$emptyemail="";
$emptyphn="";
$emptygender="";
$emptyage="";
$emptyimage="";
$emptypass="";
$emptycpass="";
session_start();
if(!empty($_SESSION["email1"]))
{
    header("Location: ../control/logout.php");
}


if(isset($_REQUEST["submit"]))
{

$haserror=0;

$fname=$_REQUEST["fname"];

if(!preg_match('/^[A-Za-z_]+$/',$fname))
{
    $emptyfname= " First name should be a word";
    $haserror=1;
}
else{
echo "<br> your first name is ". $fname;
}

$lname=$_REQUEST["lname"];
if(!preg_match('/^[A-Za-z_]+$/',$lname))
{
    $emptylname=" Last name should be a word";
    $haserror=1;
}
else{
echo "<br> your Last name is ". $lname;
}

$house=$_REQUEST["house"];

if(empty($house))
{
    $emptyhouse=" House name not found";
    $haserror=1;
}
else{
echo "<br> Your House name is ". $house;
}

$road=$_REQUEST["road"];

if(empty($road))
{
    $emptyroad= " Road number not found";
    $haserror=1;
}
else{
echo "<br> Your Road number is ".$road;
}

$district=$_REQUEST["district"];

if(empty($district))
{
    $emptydistrict=" District not found";
    $haserror=1;
}
else{
echo "<br> Your District is ". $district;
}

$city=$_REQUEST["city"];

if(empty($city))
{
    $emptycity=" City not found";
    $haserror=1;
}
else{
echo "<br> Your City is ". $city;
}

$phn=$_REQUEST["phn"];

if(!preg_match('/^[0-9]{11}+$/', $phn))
{
    $emptyphn=" Phone number must be 11 digit";
    $haserror=1;
}
else{
echo "<br> Your Phone number is ". $phn;
}



$email=$_REQUEST["email"];


if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    $emptyemail=" Email not found";
    $haserror=1;
}
else{
echo "<br> Your Email is ". $email;
}

$age=$_REQUEST["age"];
if(empty($age))
{
    $emptyage=" Age not found";
    $haserror=1;
}
else{
echo "<br> Your Age is ". $age;
}

// if(empty($_FILES["image"]["name"]))
// {
//     $photo= "* Enter a Jpg image";
//     $haserror=1;
// }
// else{
//     //echo "<br>".$_FILES["image"]["name"];
//     move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_REQUEST["email"].".jpg");
// }

$pass=$_REQUEST["pass"];
if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z]).{6}$/', $_REQUEST["pass"]))
{
    $emptypass=" required atleast a upporclass characters";
    $haserror=1;
}



$cpass=$_REQUEST["cpass"];
if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z]).{6}$/', $_REQUEST["cpass"]))
{
    $emptycpass= " Confirm password not found";
    $haserror=1;
}
else{

if($pass==$cpass){
    echo "<br>Your Password is succesfully set";
    }
    else
    {
    $haserror=1;
    $emptycpass=" * password not matched";;
    }
}

if($haserror==0)
{
    $mydb= new MyDB();
$conobj= $mydb->openCon();
$result=$mydb->insertData("customer",$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["house"],$_REQUEST["road"],$_REQUEST["district"],
$_REQUEST["city"],$_REQUEST["phn"],$_REQUEST["gender"],$_REQUEST["age"],$_REQUEST["email"],$_REQUEST["pass"],$conobj);
if($result===TRUE)
{
    echo "Success";
}
else
{
    echo "Error".$conobj->error;
}




//      if($haserror==0)
// {
// $existingdata=file_get_contents("../data/admin.json");
// $phpdata=json_decode($existingdata);
//     $formdata=array(
//         "fname"=>$_REQUEST["fname"],
//         "lname"=>$_REQUEST["lname"],
//         "house"=>$_REQUEST["house"],
//         "road"=>$_REQUEST["road"],
//         "district"=>$_REQUEST["district"],
//         "city"=>$_REQUEST["city"],
//         "email"=>$_REQUEST["email"],
//         "phn"=>$_REQUEST["phn"],
//         "age"=>$_REQUEST["age"],
       
//         "cpass"=>$_REQUEST["cpass"],

//     );
//     $phpdata[]=$formdata;

//     $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

// if(file_put_contents("../data/admin.json",$jsondata))
// {
//     echo "file written successfully";
// }
// else{
//     echo "file written failed";
// }

}


}

?>