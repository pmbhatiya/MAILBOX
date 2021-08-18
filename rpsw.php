<?php
include('connect.php');
session_start();
$opwd = md5($_POST['opass']);
$npwd = md5($_POST['npass']);
$uname= $_SESSION['usrid'];

$qs = "select * from userdetail Where email='$uname';";
$res = mysql_query($qs);
$ff = mysql_fetch_array($res);

if($opwd==$ff['password'] and $opwd!=$npwd)
{
$qs1 = "update userdetail SET password='$npwd' Where email='$uname';";
$res1 = mysql_query($qs1);
$_SESSION['er']="Your Current Password Has been Changed successfully.";
}
else

$_SESSION['er']="Your Current Password is incorrect Retype the current password.";

header("location:cpsw.php");


?>