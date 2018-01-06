<?php


   session_start();
   
  $user_in_session = $_SESSION['name'] ;
   
   $session_sql = "select username from Register where user ='" .$user_in_session. "'; ";
   
   $result_session = $conn->query($session_sql);;
   
 if ($result_session->num_rows >0){
   $login_session = $row['user'];
   }


   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>