<?php
include"header.php";
$uname=$_SESSION["usrid"];
include "connect.php";
$email_message=$_POST["email_message"];
$email_subject=$_POST["email_subject"];?> <body style="overflow-x:hidden; background:url('images/2.jpg');"><?PHP

 $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $cdate=$date->format('d-m-Y H:i:s a');

if(isset($_POST['btn-upload']))
{    
     
 $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
move_uploaded_file($file_loc,$folder.$final_file);
if($final_file==NULL)
{
	$path=NULL;
}
else{
$path='uploads/'.$final_file;
}

if($email_message=="")
{
	echo"<h1>Blank Not Allowed</h1></br>";
	echo "<a href='compose.php'>try again</a>&nbsp";
								
	

}else{
   $id=$_SESSION['id2'] ;
	$q= mysql_query("select * from remaildetail where id='$id' ") or die(" select Not Work") ;
if($row=mysql_fetch_array($q))
{
	$email_from=$row['email_from'];
?><img src="<?PHP

                              $result=mysql_query("select *from userdetail  where email='$uname'")or die ("not Work");
						      $row=mysql_fetch_array($result);
						      $i=$row['name'];	
						  
					?>"></img>
					<img src="<?PHP
						

                              $result=mysql_query("select *from userdetail  where email='$email_from'")or die ("not Work");
						      $row=mysql_fetch_array($result);
						      $i1=$row['name'];	
								  
					?>"></img>		<?PHP			$rs=mysql_query("insert into remaildetail (pname,email_to,email_from,email_message,email_datetime,email_subject,name) values('$i','$email_from','$uname','$email_message','$cdate','$email_subject','$path')") or die("Not Work");
	
$rs=mysql_query("insert into semaildetail (pname,email_to,email_from,email_message,email_datetime,email_subject,name) values('$i1','$email_from','$uname','$email_message','$cdate','$email_subject','$path')") or die("Not Work");

echo "<h1> Message replay Sucessfully ".$email_from."</h1>";
}
else
{
echo "<h1>please enter correct email id</h1>";
}
}
}
?>


  <footer style="margin-top:141px;">
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