<?php include '../../layouts/header.php'; ?>
<br>
<?php
include "../control/profile_process.php";
?>
<html>
<head>   
<title>  
Profile Page  
</title>  
<link rel="stylesheet" type="text/css" href="../css/mystyleproo.css">
</head>  

<body bgcolor="LightSeaGreen">   

<h1><center>WELCOME</h1>

<form><center>

<?php

echo $_SESSION["email1"]; ?>


<table>
    <br>First Name: <?php echo $fname; ?>
   
    <br>Last Name: <?php echo $lname; ?>
   
   <br>Email: <?php echo $email; ?>
    

       <br><a class="butto submit" id="rcustome" href="updateuser.php"> Update </a> </br>
   
        <br><a class="butto submit" id="ycustome" href="deleteuser.php">Delete </a> </br>
    
        
        <br> <a class="butto submit" id="zcustome" href="../../Home.php">Go to Home Page </a> </br>
        
   
    
</table>


<br>
<br>
<a class="butto submit" id="acustome" href="../control/logout.php">log out </a>
</CENTER>
<body>
<?php include '../../layouts/footer.php'; ?>
</html>