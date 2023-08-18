<?php
//start
 
    echo '<script type="text/javascript">' .
      'console.log("HElloworld");</script>';


// consoleLog('Hello, console!');
ob_start();
include_once("dbconnect.php");

//var
$school="";
$name="";
$mail="";
$address="";
$schooladdress="";
$pass="";
$class="";
$section="";
$phone="";
$date="";
$regn="";
$sql="";
// echo "serdtfvgbyhuni";
if(isset($_POST['submit']))
{
    
$school=ucwords(strtolower(trim($_POST['school'])));
// echo "$school";
$name=trim($_POST['name']);
$mail=trim($_POST['mail']);
$address=trim($_POST['address']);
$schooladdress=trim($_POST['schooladdress']);
$pass=trim($_POST['pass']);
$class=(trim($_POST['class']));
$section=trim($_POST['section']);
$phone=trim($_POST['phone']);
$regn=trim($_POST['regn']);
$date=trim($_POST['date']);


$target_dir="images/";
$target_filename=$target_dir.basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_filename))
{
    $sql="insert into `bagtrack` values('".$school."','".$name."','".$mail."','".$address."','".$schooladdress."','".$pass."','".$class."','".$section."','".$phone."','".$regn."','".$date."','".$target_filename."')";
    // echo "Helllllo";
    if(mysqli_query($dbcon,$sql))
    {
    header("Location:signup.php?msg='success'");
    echo "successfull";
    }
    else{
    echo "Errrrrrrror";
    }
}
else{
    echo "Error";
}
}


?>