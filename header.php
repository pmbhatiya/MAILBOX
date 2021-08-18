<!DOCTYPE HTML>
<html>
<?php 
include("connect.php");
SESSION_START();
if(!isset($_SESSION['usr']))
{
header('location:login.php');
}
?>

<head>
  <title>MAILBOX</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
   <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
        
</head>


  <div id="main">
    <header>

<div id="logout">

<div class="profile">
<img  src="<?PHP include "connect.php";

$uname=$_SESSION["usrid"];
$result=mysql_query("select *from userdetail  where email='$uname'")or die ("not Work");
						while($row=mysql_fetch_array($result))
						{
                                echo $row['name'];							
						}
						
					?>"></img><?PHP
					echo "<h9 style=''>".$_SESSION['usr']."</h9>";
?>
</div>
</div>


</div>

	<div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
		  <h1><span><img src="images/mailbox.png"></img></span></a></h1>
		  <h3>connect to people</h3>
          
          <h2></h2>
        </div>
      </div>
</div>	  	  
<div id="search-form">
			<form class="form-container" action="search.php" method="POST">
				<input type="text"  name="search" class="search-field" placeholder="Type search email  here..." />
				<div class="submit-container">
					<input type="submit" value="" class="submit" name="find"/>
				
				</div>
		
		</form>		


		</div>
	  

	        <nav>

			<div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="home.php"><center>HOME</center></a></li>
            <li><a href="home.php"><center>INBOX</center></a></li>
	   <li><a href="compose.php"><center>COMPOSE</center></a></li>			
            <!--<li><a href="logout.php">LOGOUT</a></li>-->
            <li><a href="viewprofile.php"><center>VIEW PROFILE</center></a></li>
<!--                   <li><a href="inbox.php">RECEIVE MAIL</a></li>
    -->            <li><a href="sentmail.php"><center>SENT MAIL</center></a></li>
                <li><a href="savemail.php"><center>SAVE MAIL</center></a></li>

				<UL>
        </div>
		
      </nav>
    </header>
