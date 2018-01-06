<?php
 include('server.php');
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="project.css">
 
</head>
<body>
  <div class="login_page">
   
        <form action="register.php" method="post">
          <!-- display validation errors here -->
          <?php include('errors.php');?>
<table>
         <tr>
            <th><label for="name">Name</label></th>
            <td><input type="text" id="name" name="name" /></td>
      </tr>
        
          <tr>
            <th><label for="email">Email</label></th>
            <td><input type="text" id="email" name="email" /></td>
      </tr>
        
         <tr>
            <th><label for="password_one">Password</label></th>
            <td><input type="password" id="password_one" name="password_one" /></td>
      </tr>
        
          <tr>
            <th><label for="confirm_pass">Confirm Password</label></th>
            <td><input type="password" id="confirm_pass" name="confirm_pass" /></td>
      </tr>

        <tr style="display:none">
            <th><label for="address">Address</label></th>
            <td><input type="text" id="address" name="address" /><p>Please leave this field blank</p></td>
      </tr>

        </table>

         <input type="submit" value="Register" name="reg_page" />

          <p class="login_">Already registered? <a href="login.php">Log in!!</a></p>
        </form>
      </div>

</form>
</body>
</html>
