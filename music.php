
<?php
include("connection.php");

$pageTitle = "Music";
include ("header.php");


if(isset($_GET["s"])){ 
    $search = $_GET["s"];

?>

<div class="main-list">
 <ul class="items">

 	<?php
if(!empty($search)) {

  
  
       $sql = "SELECT media_id, title, category, img 
         FROM Media
         WHERE title LIKE '%".$search."%'";


       
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
}

else{
?>


<div class="main-list">
 <ul class="items">
<?php
$sql = "SELECT media_id, title, img FROM Media WHERE category = 'Music'";


   $result = $conn->query($sql);
  

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
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

?>

</ul>
</div>

<?php  }  ?>

<?php   
include("footer.php");

 ?>