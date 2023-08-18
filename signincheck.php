<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    //For the login database

    ob_start();
    session_start();
    include_once("dbconnect.php");

    $mail="";
    $pass="";
    

    $mail=$_POST['mail'];
    $pass=$_POST['pass'];

    $sql= "select count(*) from `bagtrack` where mail='".$mail."'and pass='".$pass."'";
    $inter_res=mysqli_query($dbcon,$sql);
   $res=mysqli_fetch_array($inter_res);
   if($res[0]>0)
   {
    $_SESSION['userid']=$mail;
    header("Location:success.php");
   }
   else{
    header("Location:wrong.php");
   }

    ?>
</body>
</html>