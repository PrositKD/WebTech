<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","tri_gardening");
return $conn;
}

function insertData($tablename, $name,$phone,$email,$photo,$gender
,$dob,$address,$vehicle,$feetype,$fee,$password,$conn){
$sql="INSERT INTO $tablename (Name,Phone,Email,Photo,Gender,DOB,Address,
Vehicle,Feetype,Fee,Password) VALUES ('$name',$phone,'$email','$photo','$gender',
'$dob','$address','$vehicle','$feetype','$fee','$password')";
$result=$conn->query($sql);
return $result;
}
function checkUser($tablename, $email, $password, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' AND 
    password='$password'";
    $result=$conn->query($sql);
return $result;
}
function viewUser($tablename, $email, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' ";
    $result=$conn->query($sql);
return $result;
}
function updateUser($tablename, $conn, $fname, $lname, $gender, $file,$dob, $add,$vec,$feet,$fee,$pass,$email){


$sql= "UPDATE $tablename SET Name='$fname', Phone='$lname',gender='$gender',Photo='$file',DOB='$dob',Address='$add',Vehicle='$vec',Feetype='$feet',Fee='$fee',Password='$pass' WHERE email = '$email' ";
 $result = $conn->query($sql);
 return $result;
}
function searchUser($tablename, $conn, $email)
{
    $sql="SELECT * FROM $tablename WHERE Area = '$email'and Status='requested'";
    $result = $conn->query($sql);
    return $result;
}
function acceptUser($tablename,$email1, $conn, $email){


    $sql= "UPDATE $tablename SET Status='$email1' WHERE Product = '$email' ";
     $result = $conn->query($sql);
     return $result;
    }

    function Requestuser($tablename, $conn, $email)
{
    $sql="SELECT * FROM $tablename WHERE Status = '$email'";
    $result = $conn->query($sql);
    return $result;
}
function historyuser($tablename, $conn, $email,$email1)
{
    $sql="SELECT * FROM $tablename WHERE Status in ('$email','$email1')";
    $result = $conn->query($sql);
    return $result;
}
}


?>