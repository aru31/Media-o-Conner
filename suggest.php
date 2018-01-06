<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET["s"])){
  $search = $_GET["s"];
     header("location: search.php?s=".$search);
   exit;
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){
$name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
  
$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
  
  $title = trim(filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING));

  $category = trim(filter_input(INPUT_POST,"category",FILTER_SANITIZE_STRING));

  
  if($name == "" || $email == "" || $category == "" || $title == ""){
  $error_message = "Please fill in the required fields: Name, Email, Category and Details";
  }

if($_POST["address"] != ""){
  echo "Bad form input";
  exit;
}


require("phpmailer.php");
  require("SMTP.php");

//The following methods are included in one file

$mail = new PHPMailer(true);//kinda object variable
//single arrow relates to object and its methods


if((!$mail->ValidateAddress($email)) && ($email != "")) {
  $error_message = "Invalid Email Address";
}


if(!isset($error_message)){  //i.e everything is true
$email_body = "";
$email_body .= "Name " . $name . "\n";
$email_body .= "Email " . $email . "\n";
$email_body .= "Title " . $title . "\n";
$email_body .= "Category " . $category . "\n";
echo $email_body;


  
  //To Do: Send email
  try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aru31';                 // SMTP username
    $mail->Password = 'Arp31121997';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('guptarpit1997@gmail.com', 'Arpit Gupta');     // Add a recipient
   

    
    $mail->isHTML(false);                                  // Set email format to HTML but we want plain text so false
    $mail->Subject = 'Personal Media Library Suggestion from' .$name;//this line refers to object's subject property
    $mail->Body    = $email_body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
   
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
  

header("location:suggest.php?status=thanks");
}  




}
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("header.php"); ?>


<?php


?>
<div class="section page">
  <div class="wrapper">
    <h1>Suggest a Media Item</h1>
    
    <?php if(isset($_GET["status"]) && ($_GET["status"]=="thanks")){

echo "<p>Thanks for the email: I&rsquo;ll check out your suggestion shortly!</p>";
}  

else { 


  if(isset($error_message)){
  echo "<div class='error_message'>" . $error_message ."</div>";
}


else { ?>
    
    <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>

  <?php }  ?> 

   <div class="suggest_form">
    <form method="post" action="suggest.php">
      <table>
      
      <tr>
            <th><label for="name">Name (required)</label></th>
            <td><input type="text" id="name" name="name" /></td>
      
      </tr>
        
         <tr>
            <th><label for="email">Email (required)</label></th>
            <td><input type="text" id="email" name="email" /></td>
      
      </tr>
        
         
        
         <tr>
            <th><label for="category">Category (required)</label></th>
            <td><select id="category" name="category">
          <option value="Books">Book</option>  
          <option value="Movies">Movie</option>
          <option value="Music">Music</option>      
              </select></td>
      
      </tr>
        
        
        <tr>
            <th><label for="title">Title (required)</label></th>
            <td><input type="text" id="title" name="title" /></td>
      
      </tr>
        
        
         <tr>
            <th><label for="format">Format</label></th>
            <td><select id="format" name="format">
          <option value="Books">Book</option>  
          <option value="Movies">Movie</option>
          <option value="Music">Music</option>      
              </select></td>
      
      </tr>
        
        
         <tr>
            <th><label for="details">Suggest Item Details</label></th>
            <td><textarea name="details" id="details"></textarea></td>
      
      </tr>
        
         <tr style="display:none">
            <th><label for="address">Address</label></th>
            <td><input type="text" id="address" name="address" /><p>Please leave this field blank</p></td>
      
      </tr>
        
     </table>

      <input type="submit" value="Send" />
        
   
    </form> <!--Generally we use post method to sumbit form data to the server-->
</div>

    <?php }  ?>
    
</div>
</div>
<?php include("footer.php"); ?>






