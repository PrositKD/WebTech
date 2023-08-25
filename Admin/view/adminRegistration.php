<?php include '../../layouts/header.php'; ?>
<br>
<?php include '../control/process.php'; ?>


<html>
    <head>
        <title>Tri Gardening</title>
        <link rel="stylesheet" type="text/css" href="../css/Reg.css">
  
    </head>
    
    <body bgcolor="LightSeaGreen"> 
    
    <?php include '../../layouts/header.php'; ?>
<br>


       <h1><Center> Admin Registration</h1></Center>

       <script src="../js/myscript.js"></script>
        <form action="" method="post" onsubmit="return validation()">  

       
        <center>
            <table>
                
              <tr>   <td>  Name:</td> 
               <td>
                <input type="text" id="fname" name="name"> 
            
               </td>
                <td><?php echo $emptyname   ?></td>
               <p id="fnameerror"></p>
               </tr>
             
             <tr>   <td>  Email:</td> 
               <td>
                <input type="email" id="email" name="email"> 
                </td>
                <td><?php echo $emptyemail   ?></td>
                <p id="emailerror"></p>
             </tr>
             <tr>   <td>  Phone:</td> 
               <td>
                <input type="number" id="phone" name="phone"> 
                </td>
                <td><?php echo $emptyphone   ?></td>
                <p id="phoneerror"></p>
             </tr>
             <tr>
              <td>Gender :</td>
              <td>
                <input type="radio" id="gender" Name="Gender" value="Male">
                Male
                <input type="radio" id="gender1" Name="Gender" value="female">
                Female
                <input type="radio" id="gender2" Name="Gender" value="others">
                others 
</td>
                <td><?php echo $gn ?>
                <p id="gendererror"></p>
              </td>
             </tr>


             <tr>   <td>  Date of Birth:</td> 
               <td>
                <input type="date" id="date"name="date"> 
                </td>
                <td><?php echo $emptydob   ?></td>
                <p id="dateerror"></p>
             </tr>
             <tr>   <td>  NID:</td> 
               <td>
                <input type="number" id="nid" name="NID"> 
                <td><p id="niderror"></p></td>
                </td>
                <td><?php echo $emptynid   ?></td>
                
             </tr>
             <tr>   <td>  Address:</td> 
               <td>
                <textarea rows="4" col="6" id="address" name="address"> </textarea>
                </td>
                <td><?php echo $emptyaddress   ?></td>
                <td><p id="addresserror"></p></td>
             </tr>
             <tr>   <td>  Password:</td> 
               <td>
                <input type="password" id="pass1" name="Password"> 
                </td>
                <td><?php echo $emptypassword  ?></td>
                <p id="pass1error"></p>
               </td>
             </tr>
             <tr>   <td>  Confirm Password:</td> 
               <td>
                <input type="password" id="pass2" name="confirm"> 
                </td>
                <td><?php echo $emptyconfirmpassword   ?></td>
                <p id="pass2error"></p>
             </tr>
             <tr>
                <th></th>
                <th>
             <input type="Submit" name ="submit">
                <input type="Reset">
                </th>
             </tr>
             <br></br>
             <tr>
                
                <th>
                     <a href="../view/login.php">Login as Admin</a>
                 </th>
             </tr>




            </table>
            </center>
        </form>
        <?php include '../../layouts/footer.php'; ?>

    </body>