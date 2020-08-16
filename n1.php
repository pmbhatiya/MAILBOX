<?PHP
include "header.php";
include("connect.php");

if(!isset($_SESSION['usr']))
{
header('location:login.php');
}

mysql_connect("localhost","root","") or die('Error in connection');
mysql_select_db('mail') or die('No Database Found');

$fileName = $_FILES['p']['name'];
$tmpName  = $_FILES['p']['tmp_name'];
    move_uploaded_file($_FILES['p']['tmp_name'],'tmp/'.$_FILES['p']['name']);
     $path='tmp/'.$fileName;

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
$uname=$_SESSION["usrid"];
$qs = "select * from userdetail Where email='$uname';";
$res = mysql_query($qs);
$ff = mysql_fetch_array($res);
$qs1 = "update userdetail SET name='$path' Where email='$uname';";
$res1 = mysql_query($qs1);

$_SESSION['em']="set successfully.";

header('location:viewprofile.php');


?>
  