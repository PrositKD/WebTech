<?php
include ("../control/update_control.php");
?>
<html>

<body>


<form action="" method="POST" enctype="multipart/form-data">
<center>

<table>
                
              <tr>   <td>  Name:</td> 
               <td>
                <input type="text" name="name"value="<?php echo $name; ?>" size="15"/><br> 
                </td>
                <td></td>
             </tr>
             
             <tr>   <td>  Email:</td> 
               <td>
                <input type="email" name="email"> 
                </td>
                <td></td>
             </tr>
             <tr>   <td>  Phone:</td> 
               <td>
                <input type="number" name="phone"> 
                </td>
                <td></td>
             </tr>
             <tr>
              <td>Gender :</td>
              <td>
                <input type="radio" Name="Gender" value="Male">
                Male
                <input type="radio" Name="Gender" value="female">
                Female
                <input type="radio" Name="Gender" value="others">
                others 
</td>
                <td>
              </td>
             </tr>


             <tr>   <td>  Date of Birth:</td> 
               <td>
                <input type="date" name="date"> 
                </td>
                <td></td>
             </tr>

           </table>
 

<input type="submit" name="update" value="Update">
</form>
</body>
</center>
</html>