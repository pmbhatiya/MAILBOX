<html>
<head>
<style>
.align input[type=text]
{
	width:500px;
}
</style>
		<?php
		include "header.php";
        ?>
	
</head>
		<body style="overflow-x:hidden; background:url('images/2.jpg');">		  
          <table  class="ta"align="center">
           <tr><form  align="left" method="post" enctype="multipart/form-data" action="insertmail.php"> 
		   <div class="align"><td align="left" valign="top">To :</td>
            <td><input  class="to" type="text"   cols="40" rows="10" name="email_to" id="email_to" /></td>
           </tr>
       <tr>
            <td align="left"  valign="top">subject:</td>
            <td><input type="text" class="subject" cols="40" rows="10" name="email_subject" id="email_subject" /></td>
           </tr>
        </div>
	<tr>
            <td align="left" valign="top">Message :</td>
            <td><textarea cols="40" rows="10" name="email_message" id="email_message"></textarea></td>
           </tr>
            <tr>
           <div class="bro"> <td align="left" ></td>
	
     <td align="left"><input  align="left" name="file" type="file" ></td>
	 <td align="left"><input   align="left"  name="btn-upload" type="submit" class="box" id="upload" value=" send mail "></form> </td>
          </div>
            </tr>
 </table>

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
</html><?php include "close.php";?>