<?php
include "header.php";
include "connect.php";
$id=$_GET["id"];
$rs=mysql_query("delete from semaildetail where id=$id")or die ("not Work");
header("location:sentmail.php");
?>