<?php
include ("../model/mydb.php");

$email=$_REQUEST["email"];

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("product",$email, $conobj );
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $product=$row["product"];
        $photo=$row["photo"];
        $price=$row["price"];
        $category=$row["category1"];
        
        echo "name: ".$product.$photo.$price.$category;
    }
}
else
{
    echo "no data found";
}


?>