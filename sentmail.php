<html>
<head>
<style>
.page a{
font-size:40px;
border-radius:3px;
	color:white;
	background:url("./images/111.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);
}

</style>

		<?php
		include "header.php";
		?>
</head>
<body  style="overflow-x:hidden; background:url('images/2.jpg');">
		  <?php
					$uname=$_SESSION["usrid"];

						$result=mysql_query("select * from semaildetail where email_from like '$uname'")or die("not Work");
				
		  $tp=10;
		  $sp=0;
					$result=mysql_query("select * from semaildetail where email_from like '$uname'  order by id  desc  LIMIT  $sp , $tp ")or die("not Work");
				  	
			$r= mysql_num_rows($result);
			
					echo "<h1><center>".$_SESSION['usr']." Mail Box</center></h1>";
					echo "<br><div id=mail>";
					
						
						
						while($row=mysql_fetch_array($result))
						{
							echo "<div class=sidebar>";
							$_SESSION['id']=$row['id'];
                                  
							?><div id="i"><img src="<?PHP echo $row['pname']; ?>"></img></div><?PHP
								
				echo "<div class=jay>".$row['email_to']."</br>";
				echo "<b>".$row['email_subject']."</b>";
	            echo "</div><div class=ja>".$row['email_datetime']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					            echo "<a href='opensent.php?id=$row[id]'><b>open</b></a></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
                               	echo "</div>";							
								}
								
			
					

					?><?PHP
							if($r<10)
					{
					?>
								
					<?PHP 
					}       else { ?>
						  </div><div class="page"><center><a href="sent1.php">Next</a></center></div>
							<?php
					}
							?>		 
								    </div><footer>
						
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
<?php include "close.php";?>