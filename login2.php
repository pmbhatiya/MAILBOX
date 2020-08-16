<?php
if(isset($_POST['email']))
{
session_start();
include("connect.php");

$username = $_POST['email'];
//$password = $_POST['password'];
$password = md5($_POST['password']);
$_SESSION['usrid']=$username;
$q = "SELECT * FROM userdetail WHERE email='$username' AND password='$password'";
$result = mysql_query($q)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);
		if( $num_row >=1 ) 
		{
			$_SESSION['usr']=$row['firstname']." ".$row['lastname'];
			$_SESSION['userid']=$row['email'];
			header('location:home.php');
			
		
		}
		else{
		$_SESSION['error']="Wrong User Id or Password";
		header('location:login.php');
		}

include "close.php";

}
else{
	

		header('location:login.php');
	
}?>