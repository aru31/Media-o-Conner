<?php

include('server.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $pageTitle ?></title>
  <link rel="stylesheet" href="project.css">

</head>

   <div class="main-nav">
        <ul class="nav">
          <li class="name"><a href= #>Media'o Conner</a></li>
          <li class="welcome"><a href= #>Welcome <?php echo $_SESSION['username']. "..!" ?> </a></li>
          <li><a href="project_woc.php?logout=1">Log out</a></li>
        </ul>
    </div>


<header>
  
<?php
    if(isset($_SESSION['success'])) {  ?>
<div class="success">
  <?php
   echo $_SESSION['success'];
unset($_SESSION['success']);
                
    }
?>
</div>

  <h1 class="heading">Search for Books, Movies, Music...</h1>

 <div class="search">
  <form method="GET">
    <label for="s"><b>Search:</b></label>
    <input type="text" name="s" id="s" placeholder="Search for......" />
    <input type="submit" value="Go" />  
  </form>
  </div>



<div class="categories">
<ul class="category">
  <li><a href="books.php">Books</a></li>
  <li><a href="movies.php">Movies</a></li>
  <li><a href="music.php">Music</a></li>
  <li><a href="suggest.php">Something Missing! Suggest</a></li>


</ul>
</div>

<?php
if($pageTitle == "Details"){  ?>

<h2 class="click_me" id="scroll"><a href="#identifier">Check Details! Click Me..!!!</a></h2>
 

 <?php } 
 
 else{ ?>
  <h2 class="click_me" id="scroll"><a href="#identifier">Wanna Move Down! Click Me..!!!</a></h2>
  <?php } ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script src="woc.js"></script>

</header>
</html>




