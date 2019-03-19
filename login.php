<?php
 require('server.php'); 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="project.css">
 
</head>
<body>
	<div class="login_page">
  		
    		<form  action="login.php" method="POST">
          

<table>

      		 <tr>
            <th><label for="username">Name</label></th>
            <td><input type="text" id="username" name="username" /></td>
      </tr>
        

         <tr>
            <th><label for="password">Password</label></th>
            <td><input type="password" id="password" name="password" /></td>
      </tr>

       <tr style="display:none">
            <th><label for="address">Address</label></th>
            <td><input type="text" id="address" name="address" /><p>Please leave this field blank</p></td>
      </tr>
      
</table>  
      		 <input type="submit" value="Login" name="log_page" />

      	<p class="login_">Not registered? <a href="register.php">Create an account</a></p>
  	
      	</form>
  
</div>

</body>
</html>



