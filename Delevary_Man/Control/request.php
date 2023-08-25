<?php

include "../model/mydb.php";
session_start();

$email12=$_SESSION["email"];
$email=$_REQUEST["email"];

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("delevary_items", $conobj, $email);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        

        echo "<div class='column'";
        echo "<div class='card'>";
        
        
       echo " <p class='title'>"."Seller: ".$row["Seller"]."</h4> ";
       echo "<p>"."Customer:  ".$row["Customer"]."</p>";
        echo "<p>"." Product: ".$row["Product"]."</p>";
        echo "<p>"."  Date: ".$row["Time"]."</p>";
        echo "<p>"." Address : ".$row["Address"]."</p>";
        echo "<p>"." Phone : ".$row["Phone"]."</p>";
    echo "<a class='btn info' href='Accept.php?email=".$row["Product"]."&email1=$email12'>PickUP</a>";
   
    echo "</div>";
    echo "</div>";


    }
}
else
{
    echo "no data found";
}
?>