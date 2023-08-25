<?php include '../../layouts/header.php'; ?>
<br>
<?php

include ('../control/loginControl.php');
?>

<html>
    <center>
<head>   
<title>  
Login Page  
</title>
 
<link rel="stylesheet" type="text/css" href="../css/Profile.css">
</head>  
<body bgcolor="LightSeaGreen">  
    <h1>Login As Admin </h1>
    <br></br>
<form action="" method="POST">
<table><tr>
    <td>
Email: 
</td>
<td>
    <input type="text" name="emaila">
</td>
</tr>
<tr><td>
Password: 
</td>
<td><input type="password" name="password">
</td>
</tr>
<tr>
    <td>
<a href="../view/adminRegistration.php">Create new account</a>
</td>
<td>
<input type="submit" name="login" value="Log In">
</td>
</tr>
</table>
</form>


</body>
</center>

</html>