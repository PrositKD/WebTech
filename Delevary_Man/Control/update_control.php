<?php
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
include ("../model/mydb.php");

$selected="";
$email=$_SESSION["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->viewUser("delivary_man", $email, $conobj);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
{
            $fname= $row["Name"];
            $gender= $row["Gender"];
            $phon= $row["Phone"];
            $phot1= $row["Photo"];
            $email= $row["Email"];
            $dob= $row["DOB"];
            
            $addg= $row["Address"];
            $vec= $row["Vehicle"];
            $ftyp= $row["Feetype"];
            
            $feee= $row["Fee"];
    
}

}
if(isset($_REQUEST["update"])){
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
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$email.".jpg");
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
    if($haserror=0){
        echo "ck";}

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
            $passwrod="  * password not matched";
            
             }
            }
   if($haserror==0){
         
         if($_FILES["image"]["name"]!="")
         {
           
             $file="../uploads/".$email.".jpg";
             move_uploaded_file($_FILES["image"]["tmp_name"],$file);
         }
         else{
             $file=$phot1;
         }
             $mydb = new Mydb();
             $conobj = $mydb->openCon();
             $result=$mydb->updateUser("delivary_man", $conobj, $_REQUEST["uname"], 
             $_REQUEST["phn"], $_REQUEST["gender"],$file,$_REQUEST["date"],
             $_REQUEST["address"],$_REQUEST["vehicle"],$_REQUEST["opt"],$_REQUEST["tk"],$_REQUEST["pass2"], $email);
             echo "Update success";
}


}



?>