<?php
include("connection.php");

$pageTitle = "Search Results";

include("header.php");
  if(!isset($_SESSION['username'])){
     header('location: login.php');
  }

  if(!isset($search)){
   header('location: project_woc.php');
  }

$search = $_GET["s"];


?>

<div class="main-list">
 <ul class="items">

 	<?php
if(!empty($search)) {

 
  
       $sql = "SELECT media_id, title, category, img 
         FROM Media
         WHERE title LIKE '%".ucwords($search)."%'";

       
          $result_search = $conn->query($sql);
        
if ($result_search->num_rows > 0) {
    // output data of each row
    while($row = $result_search->fetch_assoc()) {
        echo "<li><a href='details.php?id="
        . $row["media_id"] ."'><img src='" 
        . $row["img"] . "' alt='" 
        . $row["title"] . "' />" 
        . "<p>View Details</p>"
        . "</a></li>";
    }

} else {
    echo "0 results";
}
   

}

include("footer.php");