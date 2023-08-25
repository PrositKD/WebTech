<?php
include ("../control/update_control.php");
?>
<html>
<head>
        <title>Tri Gardening </title>
    </head>
    <body bgcolor="LightSeaGreen">
   
    <link rel="stylesheet" type="text/css" href="../css/update.css">  
        <h1><CENTER>Update Profile</center></h1>
<body>


<form action="" method="POST" enctype="multipart/form-data"><center>
<table>
            <tr>
                <td> 
                    Name:
                </td>
                <td> 
                
                    <input type="text" Name="uname" value="<?php echo $fname; ?>" ><br> 
                </td>
            </tr>
            <tr>
                <td> 
                <tr>
                <td> 
                    Phone Number:
                </td>
                <td> 
                    <input type="text" Name="phn" value="<?php echo $phon; ?>" ><br> 
                </td>
            </tr>
            
            <tr>
                <td> 
                    Photo:
                </td>
                <td> 
                    <input type="file" name="image"><br> 
                    </td>
            </tr>
            
            <tr><td></td>
                <td> 
                    <img src="<?php echo $phot1; ?>" width="100" height="100">

                </td>
            </tr>
            
            <tr>
                <td> 
                    
                    Gender:
                </td>
                <td> 
                <br>  
                        <input type="radio" name="gender" value="Male" 
                        <?php
                        if($gender=="Male")
                        echo "checked";
                        ?>
                        /> Male <br>  
                        <input type="radio" name="gender" value="Female"
                        <?php
                        if($gender=="Female")
                        echo "checked";
                        ?>
                        /> Female <br>  
                        <input type="radio" name="gender" value="Other"
                        <?php
                        if($gender=="Other")
                        echo "checked";
                        ?>
                        /> Other  
                        <br>  
                </td>
            </tr> 
         
            <tr>
                <td> 
                    Date of Birth:
                </td>
                <td> 
                    <input type="date" name="date" value="<?php echo $dob; ?>"><?php echo $date1 ?><br> 
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <textarea rows="5" col="17" name="address"> <?php echo $addg; ?></textarea> <?php echo $address1 ?><br> 
            </tr>
            <tr>
                <td>
                    Vehicle:
                </td>
                <td>
                    <input type="radio" name="vehicle" value="Cycle" <?php
                        if($vec=="Cycle")
                        echo "checked";
                        ?>
                        />Cycle
                    <input type="radio" name="vehicle" value="Bike" <?php
                        if($vec=="Bike")
                        echo "checked";
                        ?>
                        />Bike
                    <input type="radio" name="vehicle" value="Truck" <?php
                        if($vec=="Truck")
                        echo "checked";
                        ?>
                        />Truck
                    <?php echo $vec1 ?><br> 
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
                    <input type="text" name="tk" value="<?php echo $feee; ?>"> <?php echo $fee1 ?><br> 


                </td>
             </tr>
            <tr>
                <td>
                   New Password:
                </td>
                <td>
                    <input type="Password" name=pass1 > <?php echo $pass1 ?><br> 
                   
                </td>
            </tr>
            <tr>
                <td>
                    Confirm Password:
                </td>
                <td>
                    <input type="Password" name=pass2 > <?php echo $pass2 ?> <?php echo $password ?>
                   
                </td>
            </tr>
        
            <tr><td></td>
                <td> <input type="submit" name="update" value="Update">
                </td>
</tr>
          </table></center>





</form>
</body>
</html>