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
</head>  
<body bgcolor="LightSeaGreen">    
<h1><center>Log in as Seller</h1>
<form action="" method="POST"><center>
    <BR>
<table>
<tr>
    <td>
    <h3>Email:</h3>
    </td>
    <td>
    <h3><input type="text" name="emails"></h3>
    </td>
</tr>
<tr>
    <td>
    <h3>Password:</h3>
    </td>
    <td>
    <h3><input type="password" name="password"></h3><?php echo $ip ?>
    </td>
</tr>
<tr>
    <td>
    
    </td>
    <td>
    <h3><input type="submit" name="login" value="Log In"></h3>
    </td>
</tr>
<tr>
    <td>
    
    </td>
    <td>
    Don't have an account?
    </td>
</tr>
<tr>
    <td>
    
    </td>
    <td>
    <a href="../view/registrationFrom.php">Sign up for Tri Gardening</a>
    </td>
</tr>

</table>
</form>


</body>

</html>