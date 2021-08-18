<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["id"]);
session_destroy();
header("location:login.php");
include "close.php";

?>