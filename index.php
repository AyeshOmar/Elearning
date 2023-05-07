
<?php

include("dataBaseConnexion.php");
?>

<!DOCTYPE html>
<html>
  <head>
  	
    <title>Login Page</title>
    
    <link rel="stylesheet" type="text/css" href="page.css">
     <link rel="stylesheet" type="text/css" href="photoCodage.css">
  </head>
  <body>



    <div class="login-box">
      <p class="titleLogin">Login</p>



  <?php if (isset($_GET['error'])) { ?>

    
        <p id="error" class="error"><?php echo $_GET['error']; ?></p>


      <?php } ?>


      <form method="POST" action="login.php" >
        <label for="username">username</label>
        <input type="text" id="user" name="user" placeholder="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password" required>


        <input type="submit" value="Login" name="submit">
      </form>

 
</div>


<script src="javaScript.js"></script>
</body>

  <?php
?>