<?php
include "../control/showalluser_process.php";
?>

<html>
<head>   
<title>  
Profile Page  
</title>  

<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
</head>  
<body>  

<h1> All Users </h1>
<?php

if($result->num_rows > 0)
{
  
    while($row=$result->fetch_assoc()){

echo "<div class='column'";
        echo "<div class='card'>";
        
       echo " <p class='title'>".$row["fname"]." ".$row["lname"]."</h4> ";
        echo "<p>".$row["email"]."</p>";
        echo "<p>".$row["gender"]."</p>";
        echo "<p>".$row["city"]."</p>";
    echo "<a class='btn info' href='updateuser.php?email=".$row["email"]."'>Edit</a>";
    echo "<a class='btn danger' href='deleteuser.php?email=".$row["email"]."'>Delete</a>";
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