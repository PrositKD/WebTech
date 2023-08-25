<?php include '../../layouts/header.php'; ?>
<br>
<?php
include ('../control/login_control.php');
?>

<html>
<head>   
<title>  
Login Page  

</title> 
<link rel="stylesheet" type="text/css" href="../css/loginuser.css"> 
</head>  
<body bgcolor="LightSeaGreen">  

<h1>Login as Delivary Man</h1>

<form action="" method="POST">
<h5>  Email: </h5>
<input type="text" name="email1">
<?php echo $not ?>
<h5> Password: </h5>
<input type="password" name="password">
<?php echo $not1 ?>
<br>
<input type="submit"  name="login" value="Log In">
<br>
 Need an account? 
 <input type="button"  onclick="location='resistration.php'" value="Resister" />
              
</form>



</body>


</html>