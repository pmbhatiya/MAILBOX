<?php
include "header.php";
include "connect.php";
$id=$_GET["id"];
$rs=mysql_query("delete from emailsave where id=$id")or die ("not Work");
header("location:savemail.php");
?>