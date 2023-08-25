<?php include '../../layouts/header.php'; ?>
<br>
<?php 
include '../control/validation.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Tri Gardening</title>
</head>
<body bgcolor="LightSeaGreen">
        <h1><center>Seller Registration Form</h1>
        <form action ="" method="post" enctype="multipart/form-data" ><center>
            <table>
                <tr>
                    <td>
                        Name :
                    </td>
                    <td>
                        <input type="text" Name= "n" placeholder="Your Name"><?php echo $n ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone :
                    </td>
                    <td>
                        <input type="phone" Name= "p" placeholder="eg:01727826804"><?php echo $pn ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" Name= "e" placeholder="eg:abc12@gmail.com"><?php echo $em ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password :
                    </td>
                    <td>
                        <input type="password" Name= "pa" placeholder="*****"><?php echo $passs ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Comfirm Password :
                    </td>
                    <td>
                        <input type="password" Name= "cpa" placeholder="*****"><?php echo $mpass ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender :
                    </td>
                    <td>
                        <input type="radio" Name="G" value="Male">Male
                        <input type="radio" Name="G" value="female">Female
                        <input type="radio" Name="G" value="others">others <?php echo $gn ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth :
                    </td>
                    <td>
                        <input type="date" Name="date"><?php echo $date1 ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Shop Name :
                    </td>
                    <td>
                        <input type="text" Name= "sn" placeholder="eg:Bismillah Nursery"><?php echo $s ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Shop type :
                    </td>
                    <td>
                        <select Name= "st">
                            <option>----Select Option----</option>
                            <option>Nursery</option>
                            <option>Flower Shop</option>
                            <option>Vegetable Seller</option>
                        </select>
                        <?php echo $stt ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Shop Photo :
                    </td>
                    <td>
                    <input type="file" Name="image"><?php echo $up ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Shop Address :
                    </td>
                    <td>
                        <textarea rows="5" col="17" Name="ad"></textarea><?php echo $ad ?>
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <input type="Submit" Name="Submit">
                        <input type="Reset">
                    </td>
                </tr>
                <tr>
                <td>
                       
                </td>
                    <td>
                    <a href="../view/Login.php">Already have account? </a>
                    </td>
                </tr>
            </table>
        </form>
    </body></CENTER>
    <?php include '../../layouts/footer.php'; ?>
</html>