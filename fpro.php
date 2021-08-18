 
<?php
		
		$email_to=$_POST['email_to'];
		include "connect.php";
include "header.php";	
		?>
<body style="overflow-x:hidden; background:url('images/2.jpg');">
 <?php      
$q=mysql_query("select * from userdetail  where email='$email_to' AND '$email_to'!='$uname'") ;
if($row=mysql_fetch_array($q) )
{

 
                 $id=$_SESSION['id'] ;
			
				$q= mysql_query("select * from remaildetail where id=$id") or die(" select Not Work") ;
                 while($row=mysql_fetch_array($q))
					{
			
							$email_subject=$row['email_subject'];
							$email_message=$row['email_message'];
	$path=$row['name'];
	
				    }
					$uname=$_SESSION["usrid"];			
                    
 $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $cdate=$date->format('d-m-Y H:i:s a');?>
 <img src="<?PHP

                              $result=mysql_query("select *from userdetail  where email='$uname'")or die ("not Work");
						      $row=mysql_fetch_array($result);
						      $i=$row['name'];				 
					?>"></img>
					<img src="<?PHP

                              $result=mysql_query("select *from userdetail  where email='$email_to'")or die ("not Work");
						      $row=mysql_fetch_array($result);
						      $i1=$row['name'];				 
					?>"></img><?PHP

		$rs=mysql_query("insert into remaildetail (pname,email_to,email_from,email_message,email_datetime,email_subject,name) values('$i','$email_to','$uname','$email_message','$cdate','$email_subject','$path')") or die("Not Work");
	
$rs=mysql_query("insert into semaildetail (pname,email_to,email_from,email_message,email_datetime,email_subject,name) values('$i1','$email_to','$uname','$email_message','$cdate','$email_subject','$path')") or die("Not Work");
			
echo "<h1>forward mail successfully&nbsp &nbsp".$email_to."</h1>";

}
else{
	echo "<h1>please enter correct email id</h1>";
}



							   ?>

				
				
					
  <footer style="margin-top:200px;">
						
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
