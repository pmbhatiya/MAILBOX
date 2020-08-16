<?php
include "header.php";
include "connect.php";
$id=$_GET["id"];
$q=mysql_query("select * from remaildetail where id=$id") or die(" select Not Work");
while($row=mysql_fetch_array($q))
					{
						$name=$row['name'];
								$email_to=$row['email_to'];
								$i=$row['pname'];
								$email_from=$row['email_from'];
							$email_subject=$row['email_subject'];
							$email_message=$row['email_message'];
						$email_datetime=$row['email_datetime'];
					}
								
$rs=mysql_query("insert into emailsave (pname,name,email_to,email_from,email_message,email_datetime,email_subject) values('$i','$name','$email_to','$email_from','$email_message','$email_datetime','$email_subject')") or die("Not Work");

					header("location:home.php");

					?>
					
					