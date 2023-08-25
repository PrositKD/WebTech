<?php

include "../Model/mydb.php";

$email=$_REQUEST["email"];

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("Customer", $conobj, $email);
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
        echo "<p>"." Address : ".$row["Phone"]."</p>";
    echo "<a class='btn info' href='updateuser.php?email=".$row["Product"]."'>PickUP</a>";
   
    echo "</div>";
    echo "</div>";


    }
}
else
{
    echo "no data found";
}
?>