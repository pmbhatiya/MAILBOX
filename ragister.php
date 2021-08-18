<!DOCTYPE html>
<head>
<style>
blink{
	background:red;
}
</style>



  <title>Registration Form</title>
  <link rel="stylesheet" href="css/styleragister.css">
</head>

<body>
  <div class="container">
    <section class="register">
      <h1>Register on mailbox</h1>

 <?php     SESSION_START();
 if(isset($_SESSION['ee'])){echo "<blink>".$_SESSION['ee']."</blink>"; $_SESSION['ee']=NULL;}?>
 </br>

 
 <?php if(isset($_SESSION['et'])){echo "<blink>".$_SESSION['et']."</blink>"; $_SESSION['et']=NULL;}?>
	 
<form  method="POST" action="signpro.php" >
<table width=65% height="404">

                <tr >
				<td width="39%" height="28" >First Name </td><td width="2%">:</td> <td width="59%"><input  pattern="[a-zA-Z0-9]{2,}" type="text"  placeholder="enter first name" size=40 id="first_name" name="fn" required /><span id = "firstname" style = "color :#0F3;"
                ></span></td>				
                </tr>
				<tr>
				<td>Last Name </td><td> :</td><td> <input type="text" pattern="[a-zA-Z0-9]{2,}"  placeholder="enter last name"  size=40 id="last_name" name="ln" required /><span id = "lastname" style = "color :#0F3;"></span></td>
				</tr>
                <tr>
				<td>E-mail ID </td><td> :</td><td> <input type="email" size=40 id="e_mail" name="email" placeholder="enter your email address" required /><span id = "email" style = "color :#0F3;"></span> </td>
				</tr>
                <tr>
				<td>Your Gender</td><td>:</td> <td><input type="radio" id="gender" name="gen" value="Male" checked="checked" required /> Male  <input type="radio" name="gen" id="gender" value="Female" required /> Female<span id = "gender" style = "color :#0F3;"></span></td>
				</tr>
                <tr>
				<td>Date of Birth </td><td> :</td><td> <input type = "date" pattern="(0[1-9]|1[0-9]|2)/(0[1-9]|1[012])/[0-9]{4}" size =" 40" name="dob"placeholder="DD/MM/YYYY"  id="dob" required /><span id = "dob1" style = "color :#0F3;"></span></td>
				</tr>
				<tr>
				<td>Password </td> <td> :</td><td> <input type="password" size=40 placeholder="enter password "  name="passwd" pattern=".{6,}"  required /><span id ="pass1" style ="color :#0F3;"></span></td>
				</tr>
				<tr>
				<td>Conform password </td><td> :</td><td> <input type="password" placeholder="enter conform password "  size=40  name="passwdc" pattern=".{6,}"  required /><span style = "color :#0F3;"></span></td>
				</tr>
				<tr>
				<td>Contact No.  </td><td> :</td><td> <input type="number" size=40 placeholder="enter contact number"  name="contactno"  pattern=".{10,12}" id="contact_number" required /><span id = "contactno" style = "color :#0F3;"></span></td>
				</tr>
				<tr><td></td><td></td><td align="center"><input class = "button"  value =" Submit" type="submit" />
				&nbsp&nbsp <input class = "button" value = "Reset" type="reset" /> 
                  </td></tr></table>
</form>

	  </section>
  </div>

  

</body>
</html>