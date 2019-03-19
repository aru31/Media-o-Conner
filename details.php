<head>
  <link rel="stylesheet" href="detail.css">

</head>

<?php 

include("connection.php");

 


$sql_query = "SELECT media_id FROM Media";

 $result_id = $conn->query($sql_query);

 if ($result_id->num_rows > 0) {
    // output data of each row

    while($row = $result_id->fetch_assoc()) {

if(isset($_GET["id"])){
	$row["media_id"] = $_GET["id"];
}
elseif(isset($_GET["s"])){
	$search = $_GET["s"];
     header("location: search.php?s=".$search);
   exit;
}
else{
	header("location:project_woc.php");
	exit;
}

   }

}
  //This code means that if id doesnt matches any of the array id's it will redirect to the full catalog page....

  $pageTitle = "Details";

include("header.php"); 

if(!isset($_SESSION['username'])){
     header('location: login.php');
  }


$sql = "SELECT media_id, title, img, genre, format, year, category, authors, publisher, isbn, authors, writers, director, artist, stars FROM Media WHERE media_id ='" .$_GET["id"]."';" ;



   $result = $conn->query($sql);
  

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {  ?>


<div class="media_heading">
<?php
echo "<h2>".$row['title']."</h2>";
echo "<br>";
?>
</div>

<div class="total">

<div class="picture">

<?php
 echo "<img src='" 
        . $row["img"] . "' alt='" 
        . $row["title"] . "' />";

echo "<br>";

?>

</div>
<div class="items">

<table>
   <tr>
        <th>Genre:</th>
        <td><?php echo $row["genre"]; ?></td>
   </tr>

      <tr>
        <th>Format:</th>
        <td><?php echo $row["format"]; ?></td>
   </tr>

    <tr>
        <th>Year:</th>
        <td><?php echo $row["year"]; ?></td>
   </tr>

    <tr>
        <th>Category:</th>
        <td><?php echo $row["category"]; ?></td>
   </tr>


      <?php
       if($row['category'] == "Books"){    ?>

    <tr>
        <th>Publisher:</th>
        <td><?php echo $row["publisher"]; ?></td>
   </tr>

    <tr>
        <th>ISBN:</th>
        <td><?php echo $row["isbn"]; ?></td>
   </tr>

    <tr>
        <th>Authors:</th>
        <td><?php echo $row["authors"]; ?></td>
   </tr>
</table>

<?php    }
    
      if($row['category'] == "Movies"){    ?>

      <tr>
        <th>Director:</th>
        <td><?php echo $row["director"]; ?></td>
   </tr>

     <tr>
        <th>Writers:</th>
        <td><?php echo $row["writers"]; ?></td>
   </tr>

      <tr>
        <th>Stars:</th>
        <td><?php echo $row["stars"]; ?></td>
   </tr>
</table>

   <?php

}
    
      if($row['category'] == "Music"){   ?>

     <tr>
        <th>Artist:</th>
        <td><?php echo $row["artist"]; ?></td>
   </tr>

</table>
       <?php
}


    }

} else {
    echo "0 results";
}
?>
</div>

</div>

<?php
 include("footer.php");

?>
