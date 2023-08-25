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
<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
</head>  
<body bgcolor="LightSeaGreen">  
<h1><center>Login As Customer</h1>

<div>
<form action="" method="POST"><center>
 <table>
<tr>
<h5 id="pcustome">Email: </h5><input type="text" name="email1">
<p id="pcustome">Password:</p> <input type="password" name="pass">
<!-- </tr>
     <tr>
     <td>Password: 
     </td> <td><input type="PASSWORD" name="pass"></td>
     </tr> -->

     <br>
<input type="submit" class="button submit" name="login" value="Log In">
<input type="reset" class="button reset" name="login" value="Reset">
</br>
   <br>
Need an account? 
</br>  
<br>             
<input type="button"class="button resister" id="bcustome" name="Register" onclick="location='un.php'" value="Register" />
</br>      
        

 </table>
</form>
</div>


</body>

</html>