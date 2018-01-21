<?php
include ('setup.php');
include ('random.php');

$unique_key=generateRandomString();


if($_SERVER["REQUEST_METHOD"]== "POST"){         //All the post data is stored in _$Server variable
	$paste_data = $_POST["paste_data"];
	//Adding paste data to the database
	echo $paste_data;
  	$sql = "INSERT INTO pastebin (paste_data, unique_key) values('" .$paste_data. "','" .$unique_key. "');";
	if($conn->query($sql)===TRUE){
		$paste_link = "http://localhost/workshop/view.php?s=".$unique_key;
		echo "The paste link is <ahref=" . $paste_link . ">";
	}
}
?>