<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","tri_gardening");
return $conn;
}

function insertData($tablename, $name,$phone,$email,$photo,$gender
,$dob,$address,$password,$conn){
$sql="INSERT INTO $tablename (Name,Email,Phone,Gender,DOB,NID,Address,
Password) VALUES ('$name','$phone',$email,'$photo','$gender',
$dob,'$address','$password')";
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
function updateUser($tablename, $conn, $fname, $lname, $password, $gender,
$course, $file, $email){


$sql= "UPDATE $tablename SET firstname='$fname', lastname='$lname', password='$password',
gender='$gender',
course='$course'
file='$file'
 WHERE email = '$email' ";
 $result = $conn->query($sql);
 return $result;
}
function getAllUsers($tablename, $conn)
{
    $sql="SELECT * FROM $tablename";
    $result = $conn->query($sql);
    return $result;
}
function deleteUser($tablename, $conn, $email){
    $sql= "DELETE FROM $tablename WHERE email = '$email' ";
    $result=$conn->query($sql);
    return $result;
    }
}
function searchUser($tablename, $conn, $email)
{
    $sql="SELECT * FROM $tablename WHERE email= '$email'";
    $result = $conn->query($sql);
    return $result;
}


?>