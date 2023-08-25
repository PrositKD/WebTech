<?php include '../../layouts/header.php'; ?>
<br>
<?php 


include '../control/otpvalidation.php';
?>
<html>
<head>   
<title>  
Tri Gardening  
</title>  
</head>  
<body bgcolor="LightSeaGreen">   
<h1><center>Enter security code</h1>
<form action="" method="POST"><center>
<table>
<tr>
    <td>
    Please check your emails for a message with your code. Your code is 6 numbers long.
    </td>
</tr>
<tr>
    <td>
    <input type="Number" Name= "otpBox" ><?php echo $otpE ?>
    </td>
</tr>
<tr>
    <td>
    <input type="Submit" Name="Submit">
    </td>
</tr>
<tr>
    <td>
    We sent your code to:
    
    <?php
    echo $_SESSION['email']?>
    </td>
</tr>
<tr>
    <td>
    <a href="?link=1" name="link1">Didn't get a code? </a>
    <div id="mainSection"></div>
    </td>
</tr>

</table>
</form>


</body>
<?php include '../../layouts/footer.php'; ?>
</html>