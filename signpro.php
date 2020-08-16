<?php
if(isset($_POST['email']))
{
session_start();
include("connect.php");
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$email=$_POST['email'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$passwd1=$_POST['passwd'];
$cpasswd=$_POST['passwdc'];

 $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $cdate=$date->format('d-m-Y H:i:s a');
$contno=$_POST['contactno'];
if($_POST['gen']=="Male")
{

	$img="images/user.jpg";	



	}
else{
	
$img="images/fuser.jpg";		
}

$q=mysql_query("select * from userdetail  where  email='$email'") ;
if($row=mysql_fetch_array($q))
{
$_SESSION['ee']="allready exit this email id.";
header("location:ragister.php");
}
else{
	
if($passwd1==$cpasswd)
{
	$mi="images/mailbox1.jpg";
	$passwd=md5($_POST['passwd']);
$Q=mysql_query("insert into remaildetail (pname,email_to,email_from,email_message,email_datetime,email_subject) values('$mi','$email','mailboxteam@gmail.com','welcome to mailbox','$cdate','welcome')") or die("Not Work");
	
$sql = "INSERT INTO userdetail (`firstname`, `lastname`, `gender`, `dob`, `email`, `password`, `contact_no`,`name`) VALUES ('$fn', '$ln','$gen', '$dob', '$email', '$passwd', '$contno','$img')";
mysql_query($sql);
$_SESSION['usrid']=$email;
$_SESSION['usr']=$fn." ".$ln;
header("location:home.php");
	
}
else{
$_SESSION['et']="please check your conform password.";
header("location:ragister.php");
}
}
	
include "close.php";
}
else{
	header("location:ragister.php");
}
	
?>