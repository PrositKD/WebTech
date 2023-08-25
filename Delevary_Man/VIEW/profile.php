

<?php
include "../control/profile_process.php";
?>

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/myscript.js"></script>
<head>   
<title>  
Profile Page  
</title>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">   
</head>
<nav>
<?php include '../../layouts/header.php'; ?>
<a class='btnp warning' href="update.php">Update</a>
<a class='btnp warning' href="delete.php">Delete</a>
<a class='btnp warning' href="PickedUp.php">PickedUp</a>
<a class='btnp warning' href="Dhistory.php">History</a>
<a class='btnP danger' href="../control/logout.php" >logOut </a>
</nav>
<d class="leftSide">
  <d class="align">
<br> <?php echo "<img src='$phot1' width=100 height=100>"; ?>
<?php echo $fname; ?>
<br>Gender: <?php echo $lname; ?>
<br><?php echo $email; ?>




</d>
<?php include '../../layouts/footer.php'; ?>
</d>
<br>
  
<body bgcolor="LightSeaGreen">

<div>
<br> 
<br>
<br> 
<h1>Welcome to Profile</h1>


<hr>
<h1>Search Parcel For Location</h1>
<input type="text" id="email" 
onkeyup="fetchUsers()"/>


<!-- <input type="button" id=$email  class="button submit2" onclick="fetchUsers()" value="SeeRequest"/>  -->
<p id="print"></p>




</div>
 <!-- <p id="demo"> </p>
<button>Search</button>  -->



<br>
<br>


<br>
<br>
<body>

</html>