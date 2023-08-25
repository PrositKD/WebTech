<!DOCTYPE>
<?php include '../../layouts/header.php'; ?>
<br>
<?php 
include '../control/process.php';
?>
<html>
    <head>
        <title>
            Tri Gardening
        </title>
        <link rel="stylesheet" type="text/css" href="../css/registrationstyle.css">
</head>
<body bgcolor="LightSeaGreen">  
        <h1><center>Customer Registration</h1>
<center>


<br>  
<br>



<form action="" method="post" enctype="multipart/form-data" onsubmit="return validation()"><center>

<table>

            <tr>
            <td>Name:</td>
            <td><input type="text" id="fname" name="fname" placeholder=First_Name><?php echo $emptyfname   ?></td>
            <td><p id="fnameerror"></p></td>
            

            
            
            <td><input type="text" id="lname" name="lname" placeholder=Last_Name><?php echo $emptylname   ?></td>
            

            <td><p id="lnameerror"></p></td>
            
         </tr>  
         
         <tr>
            <td>Address:</td>
            <td><input type="text" id="house" name="house" placeholder=House><?php echo $emptyhouse   ?></td>
            <td><p id="houseerror"></p></td>
            <td><input type="text" id="road" name="road" maxlength="3" placeholder=Road_No><?php echo $emptyroad   ?></td>
            <td><p id="roaderror"></p></td>
            </tr>
            <tr>
                <td></td>
            <td><input type="text" id="district"name="district"placeholder=District><?php echo $emptydistrict   ?></td>
            <td><p id="districterror"></p></td>
           
            <td><input type="text" id="city" name="city"placeholder=City><?php echo $emptycity   ?></td>
            <td><p id="cityerror"></p></td>
            </tr>
         </tr>
         <tr>
            <td>Phone:</td>
            <td><input type="text" id="phn" name="phn" maxlength="11" pattern="\d{11}" placeholder=eg:01*********><?php echo $emptyphn   ?></td>
            <td><p id="phnerror"></p></td>
           
         </tr>  

         <tr>
  <td>Gender:</td>
  <td><select name="gender" id="gender">
    <option value="Gender">Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select></td>
  <td><p id="gendererror"></p></td>
</tr>
         <!-- <tr>
            <td>Gender:</td>
            <td><select name="gender" id="gender" >
                <option value="">Gender_type</option>
                <option value= "Male">
                  Male
                 </option>
                <option value="Female">
                 Female
                </option>
                <option value="Others">
                 Others
                </option>
              </select>
            </td>
            <td><p id="gendererror"></p></td> -->
            
            <tr>
            <td>Age:</td>
            <td><input type="text" id="age" name="age" placeholder=age><?php echo $emptyage   ?></td>
            <td><p id="ageerror"></p></td>
           
            </tr>
         
         <tr>
            <td>Email:</td>
            <td><input type="text" id="email" name="email" placeholder=email><?php echo $emptyemail   ?></td>
            <td><p id="emailerror"></p></td>
           
         </tr> 

          <tr>
            <td>Password:</td>
            <td><input type="password" id="password" name="pass" maxlength="6" placeholder=*******><?php echo $emptypass ?></td>
            <td><p id="passerror"></p></td>
           
         </tr>
         <tr>
            <td>Confirm Password:</td>
            <td><input type="password" id="confirm_password" name="cpass" maxlength="6" placeholder=*******><?php echo $emptycpass ?></td>
            <td> <p id="cpasserror"></p></td>
           
         </tr>

          
         
         <td></td>
         <td>
         <input type="submit" name="submit" value="Submit">
         <input type="Reset"value="Reset">
        </td>
        <tr>
                <td>
                    Already account? 
                    </td>
                    <td>
                    <input type="button" onclick="location='login.php'" value="Login" />
                    </td>
            </tr>

        </table>
        </form>

        <script src="../js/myscript.js"></script>
      </center>
        <?php include '../../layouts/footer.php'; ?>
        
        </html>