<!DOCTYPE HTML>
<html><?php 
include ("header.php");
include("connect.php");

if(!isset($_SESSION['usr']))
{
header('location:login.php');
}
?>
<body  style="overflow-x:hidden; background:url('images/2.jpg');">
 <div class="main22"  align="center">
<div class="img7"  align="center"><img  width="auto"
height="auto" src="<?PHP include "connect.php";

$uname=$_SESSION["usrid"];
$result=mysql_query("select *from userdetail  where email='$uname'")or die ("not Work");
						while($row=mysql_fetch_array($result))
						{
                                echo $row['name'];							
						}
						
					?>"></img><?PHP?>
</div>
<center><table   height="100%" width="100%" cellspacing="5" >
 
<tr><td>
email address&nbsp </td><td bgcolor="white">
<?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT  email FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['email']."</td></tr>";
					}

					
?>
<h1><tr><td>
first name&nbsp </td><td bgcolor="white"><?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT  firstname FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['firstname']."</td></tr>";
					}

					
?></h1>
<h1><tr><td>last name&nbsp </td><td bgcolor="white">
<?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT  lastname  FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['lastname']."</td></tr>";
					}

					
?></h1>

<h1><tr><td>date of birth&nbsp </td><td bgcolor="white">
<?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT  dob FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['dob']."</td></tr>";
					}

					
?></h1><h1><tr><td>
gender&nbsp </td><td bgcolor="white">
<?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT gender FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['gender']."</td></tr>";
					}

					
?></h1><h1><tr><td>
contact_no&nbsp </td><td bgcolor="white">
<?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT  contact_no FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['contact_no']."</td></tr></table>";
					}?>
</h1>
</div>
<div class="main33"> 
					
								<form action="rpsw.php" method="post">
            <strong><center>Change Your Password:</center></strong><br /><br />
            <center><strong>Old Password:</strong>
			
            <input type="password" name="opass" id="pass"  /></br>
            <strong>New Password:</strong>
            <input type="password" name="npass" style="margin-top:10px;" id="pass"  /></br>
			</br>
            <input type="submit" value="Change Password" class="button" />
            <br /><br /><?php if(isset($_SESSION['er'])){echo '<blink>'.$_SESSION['er'].'</blink>'; $_SESSION['er']=NULL;}?>
            </center>
            </form>	
</div>		
					
</center>
<footer>
</br>
						
      <?php     $uname=$_SESSION["usrid"];

					$result=mysql_query("SELECT  email FROM userdetail WHERE email like '$uname'")or die("not Work");
					
					while($row=mysql_fetch_array($result))
					{
						
								echo $row['email'];
					}
?>
&nbsp || &nbsp             <a href="logout.php"><h8>LOGOUT</h8></a></br>
</br></br>
	<p color="blue">Copyright &copy; 2015  www.mailbox.com</p>
</footer>
</body>
</html>