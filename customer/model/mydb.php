<?php
class mydb{
    function openCon(){
        $conn=new mysqli("localhost","root","","tri_gardening");
        return $conn;
    }
    function insertData($tablename, $fname,$lname,$house,$road,$district,$city,$phn,$gender,$age,$email,
$pass,$conn){
    
$sql="INSERT INTO $tablename (fname,lname,house,road,district,city,phn,gender,age,email,pass) VALUES 
('$fname','$lname','$house','$road','$district','$city','$phn','$gender','$age','$email',
'$pass')";
$result=$conn->query($sql);
return $result;

}
function checkUser($tablename, $email, $pass, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' AND 
    pass='$pass'";
    $result=$conn->query($sql);
return $result;
}
function viewUser($tablename, $email, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' ";
    $result=$conn->query($sql);
return $result;
}
function getUserInfo($tablename, $email, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' ";
    $result = $conn->query($sql);
    return $result;
}
function updateUser($tablename, $conn, $fname, $lname,$house,$road,$district,$city,$phn,$gender,$age,$email){


$sql= "UPDATE $tablename SET fname='$fname', lname='$lname', house='$house',road='$road',
district='$district',city='$city',phn='$phn',gender='$gender',age='$age'

WHERE email = '$email' ";
 $result = $conn->query($sql);
 return $result;
}


function deleteUser($tablename, $conn, $email){
    $sql= "DELETE FROM $tablename WHERE email = '$email' ";
    $result=$conn->query($sql);
    return $result;
    }

   
    function searchUser($tablename, $email, $conn){
        $sql="SELECT * FROM $tablename WHERE category1='$email' ";
        $result = $conn->query($sql);
        return $result;
    }
}
?>