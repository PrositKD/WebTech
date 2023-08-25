<html>

<head>
    <title>
        Home Page
</title>
</head>

<body bgcolor="LightSeaGreen">
<?php include 'layouts/header.php'; ?>
<br>
<?php   
$cookie_name = "last_visit";
$cookie_expire = time() + (60 * 60 * 24 * 30);
if(isset($_COOKIE[$cookie_name])) {
echo "Welcome back! Your last visit was " . $_COOKIE[$cookie_name] . ".";
} 
else { echo "Welcome! This is your first visit.";
}
setcookie($cookie_name, date("Y-m-d H:i:s"), $cookie_expire);?>
<h1>
    Home Page
</h1>

<a href="ADMIN/view/login.php">Admin</a>
<a href="seller/view/login.php">Seller</a>
<a href="Delevary_Man/view/login.php">Delevary_Man</a>
<a href="customer/view/login.php">Customer</a>
<br>
<br>
<br>
<hr>
</hr>
<table>

<form action="" method="post">



<h1 id="hcustome">Search Product<h1>
    <input type="text" id="email"
    onkeyup="fetchUsers()"/>
    <p id="print"></p>
<script src="customer/js/myscript.js"></script>
</form>

<tr>
     <td>
     <a href="order.php"> <img src='assets/indoor1.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Indoor plants for sale.Price :100tk</figcaption></a>
    </td>
    <td>
    <a href="order.php"><img src='assets/indoor2.avif' width=300 height=300 alt="Indoor plants">
        <figcaption>Indoor plants for sale.Price :200tk</figcaption></a>
    </td>
    <td>
    <a href="order.php"> <img src='assets/indoor3.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Indoor plants for sale, Price :150 tk</figcaption></a>
    </td>
    <td>
    <a href="order.php"> <img src='assets/indoor4.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Indoor plants for sale, Price :350 tk</figcaption></a>
    </td>
    <td>
    <a href="order.php"> <img src='assets/indoor5.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Indoor plants for sale, Price :750 tk</figcaption></a>
    </td>
</tr>
<tr>
    <td>
        <br>
        <hr>
    </td>
    <td>
        <br>
        <hr>
    </td>
    <td>
        <br>
        <hr>
    </td> 

</tr>
<tr>
     <td>
     <a href="order.php">  <img src='assets/pot1.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Plants Accessories for sale.Price :100tk</figcaption></a>
    </td>
    <td>
    <a href="order.php">  <img src='assets/pot2.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Plants Accessories sale.Price :200tk</figcaption></a>
    </td>
    <td>
    <a href="order.php">  <img src='assets/pot3.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Plants Accessories sale, Price :150 tk</figcaption></a>
    </td>
    <td>
    <a href="order.php">  <img src='assets/pot4.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Plants Accessoriesr sale, Price :350 tk</figcaption></a>
    </td>
    <td>
    <a href="order.php">  <img src='assets/pot5.jpg' width=300 height=300 alt="Indoor plants">
        <figcaption>Plants Accessories sale, Price :750 tk</figcaption></a>
    </td>
</tr>



</table>
</body>

<?php include 'layouts/footer.php'; ?>
<html>

