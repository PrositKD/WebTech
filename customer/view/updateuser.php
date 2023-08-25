<?php include '../../layouts/header.php'; ?>
<br>
<?php
include ("../control/update_control.php");
?>
<html>

<body bgcolor="LightSeaGreen">

<link rel="stylesheet" type="text/css" href="../css/mystyleupdate.css">


<form action="" method="POST" enctype="multipart/form-data">

<table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="fname" placeholder=First_Name value="<?php echo $fname; ?>"></td>
            <td><?php echo $emptyfname   ?></td>
            
            <td><input type="text" name="lname" placeholder=Last_Name value="<?php echo $lname; ?>"></td>
            <td><?php echo $emptylname   ?></td>

         </tr>  
         
         <tr>
            <td>Address:</td>
            <td><input type="text" name="house" placeholder=House value="<?php echo $house; ?>"></td>
            
            <td><?php echo $emptyhouse   ?> </td>
            <td><input type="text" name="road" maxlength="3" placeholder=Road_No value="<?php echo $road; ?>"></td>
            <td><?php echo $emptyroad   ?></td>
            </tr>
            <tr>
                <td></td>
            <td><input type="text" name="district"placeholder=District value="<?php echo $district; ?>"></td>
            <td><?php echo $emptydistrict   ?></td>
           
            <td><input type="text" name="city"placeholder=City value="<?php echo $city; ?>"></td>
            <td><?php echo $emptycity   ?></td>
            </tr>
         </tr>
         <tr>
            <td>Phone:</td>
            <td><input type="text" name="phn" maxlength="11" pattern="\d{11}" placeholder=eg:01*********  value="<?php echo $phn; ?>"></td>
            <td><?php echo $emptyphn   ?></td>
           
         </tr>  
         <tr>
            <td>Gender:</td>
            <td><select name="gender" id="gender" >
                <!-- <option value="">
              Gender type
                </option> -->
                <option value= "Male" <?php
                  if($gender=="Male")
                  echo "selected";?>>Male</option>

                <option value= "Female" <?php
                  if($gender=="Female")
                  echo "selected";?>>Female</option>
                 
                 <option value= "Others" <?php
                  if($gender=="Others")
                  echo "selected";?>>Others</option>
              </select>
            </td>
            <td></td>
            <tr>
            <td>Age:</td>
            <td><input type="text" name="age" placeholder=age value="<?php echo $age; ?>"></td>
            <td><?php echo $emptyage   ?></td>
           
            </tr>

            <!-- <tr>
            <td>Password:</td>
            <td><input type="password" id="password" name="pass" maxlength="6" placeholder=*******
            value="<?php echo $pass; ?>"></td>
            <td></td> -->
           
         </tr>
         
         
</table>


<br> <br>  

<input type="submit" class="butt submit" name="update" value="Update">





</form>
</body>
<?php include '../../layouts/footer.php'; ?>
</html>