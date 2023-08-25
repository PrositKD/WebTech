<?php 
include '../control/validation.php';
?>
<html>
<head>   
<title>  
Tri Gardening  
</title>  
</head>  
<body bgcolor="LightSeaGreen">   
<h1><center>Find Your Account</h1>
<form action="" method="POST"><center>
<table>
<tr>
    <td>
    Please enter your email address or mobile number to search for your account.
    </td>
</tr>
<tr>
    <td>
    <input type="text" Name= "EorP" placeholder="Email or phone">
    </td>
</tr>
<tr>
    <td>
    <input type="Submit" Name="submit">
    </td>
</tr>

</table>
</form>


</body>
<?php include '../../layouts/footer.php'; ?>
</html>