<?php

include("connection.php");

/*function single_item($id) {
	global $catalog;
	  $output = "<li><a href=details.php?id="
        . $id ."><img src=" 
        . ($catalog[$id]["img"]) . " alt=" 
        . ($catalog[$id]["title"]) . " />" 
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;

}*/


/*function single_item($id) {
	global $catalog;
    $output = "<li><a href='details.php?id="
        . $id ."'><img src='" 
        . ($catalog[$id]["img"]) . "' alt='" 
        . ($catalog[$id]["title"]) . "' />" 
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;
}*/

/*function category_books(){
	global $conn;
	$sql = "SELECT media_id, title, img, category FROM Media-Library WHERE category = 'Books'";

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

   return $category;
}*/

