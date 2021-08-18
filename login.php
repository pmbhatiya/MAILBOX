<!DOCTYPE html>
<html >
  <head>
  <style>
  .login-card img{
 height: 112px;
    margin-left: -119px;
    margin-top: -52px;
    position: absolute;
    width: 230px;
  }
  </style>
    <title>Log-in</title>
        <link rel="stylesheet" href="css/stylelogin.css">  
  </head><header>
  
 
  </header>

  <body   style="background:#2F0916;">  
  <div class="login-card">
    <h1><img src="images/mailbox.png"></img></br></br>Log-in</h1><br>
  <form action="login2.php" method="POST">
<input type="text" name="email" placeholder="Username">
<input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
  <center>
    <a href="ragister.php">Register</a>
  
  </center></div>
</div>



    
    
    
    
  </body>
</html>
