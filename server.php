<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "Arp31121997";
$db_log = "Login";

$connec = new mysqli($servername, $username, $password, $db_log);


if(isset($_POST["reg_page"])){
	$user = trim(filter_input(INPUT_POST, "name",FILTER_SANITIZE_STRING));
	$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
	$password_one= $_POST["password_one"];
	$password_confirm = $_POST["confirm_pass"];


//need to fill every cell
if($user == "" || $email == "" || $password_one == "" || $password_confirm == ""){
  echo "Please fill in the required fields: Name, Email and Password";
    exit;
  }

  if($password_one != $password_confirm){
  	echo "Please re-enter password, Password didn't Match";
  	exit;
  }

if($_POST["address"] != ""){
  echo "Bad form input";
  exit;
}

		$password_one = md5($password_one);// encrypt password before storing in database(security)

		$password_confirm = md5($password_confirm);

$sql = "INSERT INTO Register(user, email, password_one, password_confirm) 
           VALUES ('$user', '$email', '$password_one', '$password_confirm')";


   if($connec->query($sql) === TRUE){
		header('location: login.php'); // now after being registered u need to login
   }

}

//Now one needs to login from the login page


if(isset($_POST["log_page"])){

$user = trim(filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING));
$password = $_POST["password"];


if($user == "" || $password == ""){
  echo "Please fill in the required fields: Name and Password";
    exit;
  }

		$password = md5($password);  //encrypt password (security)

		$sql_query =  "SELECT * FROM Register WHERE user = '$user' AND password_one = '$password'";
    

$results_login = $connec->query($sql_query);


 if($results_login->num_rows > 0){
		header('location: project_woc.php'); // redirect to seesion page
}
else {
  echo "OOPS! Something went Wrong, Try Again";
}

$_SESSION['username'] = $user;
$_SESSION['success'] = "You are now successfully Logged in";

}


if (isset($_GET['logout'])) {
	unset($_SESSION['username']);
	session_destroy();
	header('location: login.php');
}
?>







