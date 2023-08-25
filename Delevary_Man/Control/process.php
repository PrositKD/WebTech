<?php
include("../model/mydb.php");
$haserror=0;
$Name="";
$number="";
$email1="";
$gender1="";
$photo="";
$date1="";
$address1="";
$vec1="";
$fee1="";
$pass1="";
$pass2="";
$password="";


session_start();
if(!empty($_SESSION["email"]))
{
    header("Location: ../control/logout.php");
}


if(isset($_REQUEST["Submit"])){

    if(empty($fname=$_REQUEST['uname']))
{
    $haserror=1;
    $Name="   * name requard";
}
else if(!preg_match('/^[A-Za-z_ ]+$/', $fname))
{
   
    $Name="   * name must be A-Z or a-z";
}


if(empty($phone=$_REQUEST['phn']))
{   $haserror=1;
    
    $number="  * Number requard";
}

else if(!preg_match('/^[0-9]{11}+$/', $phone)){
    $haserror=1;
    $number="  * Number must be 0-9 and 11 digit";
}


if(!empty($email=$_REQUEST["email"]))
{  
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    $haserror=1;
    $email1="  *  Enter correct email";
}

}
else{
    $haserror=1;
    $email1="  * email requard";

}

if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
    
}
else{
    $haserror=1;
    $gender1="  * Select gender";
}
if(empty($_FILES["image"]["name"]))
{
    $photo= "* Enter a Jpg image";
    $haserror=1;
}
else{
    //echo "<br>".$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_REQUEST["email"].".jpg");
}
$Date = date('Y-m-d', strtotime($_REQUEST['date']));

if($Date=="1970-01-01"){
    $haserror=1;
    $date1="  * Select Date";
}
else if(isset($_REQUEST["date"]))
{
   
   
    
   
}

else{
    $haserror=1;
    $date1="  * Select Date";
}
if(empty($add=$_REQUEST["address"]))
{
    $haserror=1;
    $address1="  * Address requard";
}


if(!isset($_REQUEST["vehicle"]))
{   
     

    $haserror=1;
    $vec1="    * Select Your Vachile";;
}
 $tk=$_REQUEST['tk'] ;
 $mth=$_REQUEST["opt"];

if(empty($tk))
{
    $haserror=1;
    $fee1="   * fee requard";
}

else if(!preg_match('/^[0-9]+$/', $tk))
{
    $haserror=1;

    $fee1="   * fee must be number";
}
$password1=$_REQUEST['pass1'] ;
$password2=$_REQUEST["pass2"];
if(empty($password1))
   {  $haserror=1;
    $pass1="  * enter 1st password";;
   }
   else if(empty($password2))
   {  $haserror=1;
    $pass2="   * enter 2nd password";;
   }    
    

else{
    if($password1==$password2)
       {
    
      }
     else{
        $haserror=1;
        $passwrod="  * password not matched";;
         }
        }
        if($haserror==0)
        {$mydb= new MyDB();
            $conobj= $mydb->openCon();
            $result=$mydb->insertData("delivary_man",$_REQUEST["uname"],$_REQUEST["phn"],
            $_REQUEST["email"],"../uploads/".$_REQUEST["email"].".jpg",$_REQUEST["gender"],$_REQUEST["date"],
            $_REQUEST["address"],$_REQUEST["vehicle"],$_REQUEST["opt"],$_REQUEST["tk"],$_REQUEST["pass2"],$conobj);
            if($result===TRUE)
            {
                echo "Account create Successfully";
            }
            else
            {
                echo "Error".$conobj->error;
            }




        // $existingdata=file_get_contents("../data/jsondata.json");
        // $phpdata=json_decode($existingdata);
        //     $formdata=array(
        //         "Name"=>$_REQUEST["uname"],
        //         "Phone Number"=>$_REQUEST["phn"],
        //         "email"=>$_REQUEST["email"],
        //         "Photo"=>"../uploads/".$_REQUEST["email"].".jpg",
        //         "Gender"=>$_REQUEST["gender"],
        //         "Date of Birth"=>$_REQUEST["date"],
        //         "Address"=>$_REQUEST["address"],
        //         "Vehicle"=>$_REQUEST["vehicle"],
        //         "Fee"=>$_REQUEST["opt"],
        //         "Tk"=>$_REQUEST["tk"],
        //         "password"=>$_REQUEST["pass2"],
                
        //     );
        //     $phpdata[]=$formdata;
        
        //     $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);
        
        // if(file_put_contents("../data/jsondata.json",$jsondata))
        // {
        //      echo "<center><br> Your Account was Created Succesfully";
        // }
        // else{
        //      echo "<br>file written failed";
        // }
        
        // }
    
    }
}
?>