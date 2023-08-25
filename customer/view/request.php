<?php

include "../model/mydb.php";

$email=$_REQUEST["email"];

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("customer", $conobj, $email);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        

        echo "<div class='column'";
        echo "<div class='card'>";
        
        
       echo " <p class='title'>"."Seller: ".$row["Seller"]."</h4> ";
       echo "<p>"." Product: ".$row["Product"]."</p>";
     
    echo "<a class='btn info' href='Home.php?email=".$row["Product"]."'>PickUP</a>";
   
    echo "</div>";
    echo "</div>";


    }
}
else
{
    echo "no data found";
}
?>