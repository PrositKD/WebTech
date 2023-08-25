<?php
if(isset($_REQUEST["Submit"]))
{
$name=$_REQUEST["EorP"];
if(is_numeric($name))
{
    $filedata=file_get_contents("../data/jsondata.json");
        $phpobj=json_decode($filedata);
        foreach($phpobj as $myobj)
        {
    if($myobj->Phone==$_REQUEST["EorP"])
    {
    header("Location: ../view/otp.php");
    }
        }
}
else
{

}
if(empty($name))
{
    $n=" *Enter Email or password";
}
else if($_REQUEST["EorP"]==)
{
    header("Location: ../view/otp.php");
}
else{
echo "Your name is ". $name;
}
}
?>