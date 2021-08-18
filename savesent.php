<?php
include "header.php";
include "connect.php";
$id=$_GET["id"];
$q=mysql_query("select * from semaildetail where id=$id") or die(" select Not Work");
while($row=mysql_fetch_array($q))

{
								$email_to=$row['email_to'];
								
								$email_from=$row['email_from'];
							$email_subject=$row['email_subject'];
							$email_message=$row['email_message'];
						$email_datetime=$row['email_datetime'];

								
}
$rs=mysql_query("insert into emailsave (email_to,email_from,email_message,email_datetime,email_subject) values('$email_to','$email_from','$email_message','$email_datetime','$email_subject')") or die("Not Work");
					header("location:sentmail.php");

					?>
					
					