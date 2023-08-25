<?php include '../../layouts/header.php'; ?>
<br>
<?php 
include '../Control/process.php';
?>

<link rel="stylesheet" type="text/css" href="../css/login.css">  

<html>
    <head>
        <title>Tri Gardening </title>
        
    </head>
    <body bgcolor="LightSeaGreen">
   

        <h1><CENTER>Resistration of DeliveryMan</center></h1>
        <script src="../js/myscript.js"></script>
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validation()"><center>
        
        <table>
            <tr>
                <td> 
                    Name:
                </td>
                <td> 
                    <input type="text" id="fname" Name="uname"><?php echo $Name ?> 
                  
                </td>
                
                <td> 
                <p id="fnameerror"></p>
                </td>
            </tr>
            <tr>
                <td> 
                    Phone Number:
                </td>
                <td> 
                    <input type="text" id="phn" Name="phn" ><?php echo $number ?>
                    
                </td>
                <td> 
                <p id="phnerror"></p>
                </td>
            </tr>
            <tr>
                <td> 
                    Email:
                </td>
                <td> 
                    <input type="text" id="email" Name="email"><?php echo $email1 ?><br> 
                </td>
                <td> 
                <p id="emailerror"></p>
                </td>
            </tr>
            <tr>
                <td> 
                    Photo:
                </td>
                <td> 
                    <input type="file" id="photo" name="image"><?php echo $photo ?><br> 
                </td>
                <td> 
                <p id="photoerror"></p>
                </td>
            </tr>
            
            <tr>
                <td> 
                    
                    Gender:
                </td>
                <td> 
                    <input type="radio" id="gender" name="gender" value="Male">Male
                    <input type="radio" id="gender1" name="gender" value="Female">Female
                    <input type="radio" id="gender2" name="gender" value="Other">Other
                    <?php echo $gender1 ?>
                    
                </td>
                <td> 
                <p id="gendererror"></p>
                </td>
            </tr> 
            <tr>
                <td> 
                    Date of Birth:
                </td>
                <td> 
                    <input type="date" id="date" name="date"><?php echo $date1 ?><br> 
                </td>
                <td> 
                <p id="dateerror"></p>
                </td>
            </tr>
            
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <textarea rows="5" col="17" id="address" name="address" placeholder="Address"></textarea> <?php echo $address1 ?><br> 
</td>
<td> 
                <p id="addresserror"></p>
                </td>
            </tr>

            <tr>
                <td>
                    Vehicle:
                </td>
                <td>
                    <input type="radio" id="vec" name="vehicle" value="Cycle" >Cycle
                    <input type="radio" id="vec" name="vehicle" value="Bike">Bike
                    <input type="radio" id="vec" name="vehicle" value="Truck">Truck
                    <?php echo $vec1 ?><br> 
                </td>
                <td> 
                <p id="vecerror"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Fee:
                </td>
                <td>
                    <select name="opt">
                        <option> Per km </option>
                        <option>Per hour</option>
                        <option>Per Delevery </option>
                    </select>
                   
                </td>
               
            </tr>
             <tr>
                   <td>
                   
                </td>
                <td>
                    <input type="text" id="tk" name="tk" placeholder="Tk"> <?php echo $fee1 ?><br> 


                </td>
                <td> 
                <p id="tkerror"></p>
                </td>
             </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="Password" id="pass" name=pass1 > <?php echo $pass1 ?><br> 
                   
                </td>
                <td> 
                <p id="passerror"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Confirm Password:
                </td>
                <td>
                    <input type="Password" id="pass2" name=pass2 > <?php echo $pass2 ?> <?php echo $password ?>
                   
                </td>
                <td> 
                <p id="passerror2"></p>
                </td>
            </tr>
            <tr>
                <td>
                    </td>
                <td>
                   <INPUT TYPE="SUBMIT" name="Submit" value ="submit">
                   <input type ="Reset" value="Reset">
                   
                </td>
</tr>
<tr>
                <td>
                    Already account? 
                    </td>
                    <td>
                    <input type="button" onclick="location='login.php'" value="Login" />
                    </td>
            </tr>
          </table></center>
        </FORm>
        <?php include '../../layouts/footer.php'; ?>
    </body>
</html>

