<?php
include "../control/pic_control.php";
?>

<html>
<head>   
<title>  
Percel Page  
</title>  

<link rel="stylesheet" type="text/css" href="../css/mystyle.css">   
</head>  
<body bgcolor="LightSeaGreen">


<h1>Your  All Percel are here </h1>
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
        echo "<p class='title'>"."Status:Not Delevary"."</p>";
    echo "<a class='btn info' href='History.php?done=".$row["Product"]."&email1=$email'>Delevary_DONE</a>";
    echo "<a class='btn danger' href='History.php?reject=".$row["Product"]."&email1=$email'>Cancel_Percel</a>";
   
    echo "</div>";
    echo "</div>";


    }
  
}
else
{
    echo "no data available";
}

?>



</body>
    <html>