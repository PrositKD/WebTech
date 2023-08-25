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
</head>  
<body bgcolor="LightSeaGreen">   <CENTER>

<br>Shop Name: <?php echo $shop; ?>
<br> 
<br> <?php echo "<img src='$phot1' width=600 height=300>"; ?>


<hr>

<br>Seller Name: <?php echo $fname; ?>
<br>Email: <?php echo $email; ?>


<br>
<br>
<a href="../control/logout.php">log out </a>
<body></CENTER>
<?php include '../../layouts/footer.php'; ?>
</html>