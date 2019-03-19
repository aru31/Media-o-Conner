<?php

include("connection.php");
?>
<?php 

     $pageTitle = "Library";
      include("header.php");

       if(!isset($_SESSION['username'])){
     header('location: login.php');
  }

?>


<?php
     

     if(isset($_GET["s"])){ 
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
}

else{

?>



    <div class="main-list">
 <ul class="items">

  <?php
  
 $result_random = $conn->query("SELECT media_id, title, category, img FROM Media ORDER BY RAND() LIMIT 4" );

   if ($result_random->num_rows > 0) {
    // output data of each row
    while($row = $result_random->fetch_assoc()) {
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

<?php }  ?>


<div class="primary">ABOUT ME..!</div>


<?php include("footer.php");       ?>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <script src="woc.js"></script>



</body>
</html>