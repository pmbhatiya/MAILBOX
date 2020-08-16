<?php
include "header.php";
include "connect.php";
$id=$_GET["id"];
$result=mysql_query("select *from emailsave where id=$id")or die ("not Work");

						while($row=mysql_fetch_array($result))
						{
		                       echo "
<head>
<style>
body{
		background:url('images/2.jpg');
}

.foo a{
	color:white;
	

}
#main1{
	background:url('images/2.jpg');
	width:auto;
	
}

 #main1 a{
	 border:2px solid black;
	 margin-right:5px;
	 padding-right:60px;
    padding-bottom:10px;	
	border-radius: 2px;
	text-decoration:none;
    

    position:relative;	

}
#main1 a:hover{
	transition:all 2s;
			

	box-shadow: 0px 0px 0px 2px black;
	zoom:10px;

}
center{
	text-align:center;
}
center{
	text-align:center;
}


</style>
</head>";					
							  echo "<body style='overflow-x:hidden;'><div id=main1>";
							    $_SESSION['id']=$row['id']; 
							  ?>
							  <div id="mail3"><img src="<?PHP echo $row['pname']; ?>"></img> <div class="na"><h1><?PHP  echo $row['email_from']."</h1>";
				  echo "<h12>".$row['email_datetime']."</h12>";					
				  
           
			 ?>

							  </div></div>
							 
							  <table  border="2px"align="center" >
							  <tbody background="green">

 <tr><td align="center">subject</td><td align="left" height="50px"><?PHP 
             echo $row['email_subject'];?></td></tr>
			</tr>							 
							 <tr><td align="center" > message</td> <td  height="80px" width="800px" align="left" > <?PHP  echo $row['email_message'];?>
            </td></tr>
							   </td></tr>
							 
							  <tr><td align="center">attachment</td><td align="left" height="50px" width="800px">
				<?Php            if($row['name']==NULL) { } else {?> <?PHP echo $row['name'];?><a href="<?PHP echo $row['name'];?>">open</a><?PHP  }  ?>
			 </td></tr>
							

							  
							  <?PHP
							  $_SESSION['id']=$row['id']; 
							
                   ?>   <tr align="right"  height="80px" width="800px"><td></td><td><?PHP 
				   
				        echo "<a href='deletesave.php?id=$row[id]'>delete</a>";
				
         ?></td></tr><?PHP
		 			 
								}
						?>
							
							  <tbody>
							  </table>
							  


							</div><footer class="foo">
						
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