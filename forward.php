
		<?php
		include "connect.php";
include "header.php";
$id=$_GET["id"];
$_SESSION['id']=$id;
		?>

<body style="overflow-x:hidden; background:url('images/2.jpg');position:absolute;">	

							             <table  height="50px" align="center">
           <tr>
            <td><center><form  align="center" action="fpro.php" method="POST">To :</td>
            <td><input type="text"  class="too"  align="center"   id="email_to" name="email_to"/></center></td>
           </tr>
		    <tr>
            <td ></td>
            <td><input type="submit" align="center"  value="Send Mail"/>
			</form>
			</td>
			</tr>
			</table>
		  <footer style="margin-top:300px;">
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
