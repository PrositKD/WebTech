<!-- <?php include '../../layouts/header.php'; ?>
<br> -->
<?php
include "../control/profile_process.php";
?>
<script src="../js/myscript.js"></script>
<html>

<head>
 
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

</head>  
<body bgcolor="LightSeaGreen">  
    
    

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>


 
  </div>
  <center>
<h1>Admin Profile Page <h1>  

Hi,


<br>
<br>
<hr>

<br>Name: <?php echo $name; ?>
<br>Email: <?php echo $email; ?>


<br>
<td>
<a href="update.php"> Update </a>
</td>

<a href="showalluser.php">SHOW ALL CUSTOMER </a>
<a href="../control/logout.php">log out </a>
<BR>

<input type="text" id="email" 
onkeyup="fetchUsers()"/>

<p id="print"></p>

<body>
</center>
</br>
<?php include '../../layouts/footer.php'; ?>
</html>