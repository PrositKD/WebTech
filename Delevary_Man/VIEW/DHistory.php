<?php
include "../control/Dhistory_control.php";
?>

<html>
<head>   
<title>  
History Page  
</title>  

<link rel="stylesheet" type="text/css" href="../css/mystyle.css">   
</head>  
<body bgcolor="LightSeaGreen">


<h1>Your  All Percel History are here </h1>
<?php

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
        echo "<p'>"."Status : ".$row["Status"]."</p>";
   
    echo "</div>";
    echo "</div>";


    }
  
}
else
{
    echo "no data available1";
}

?>