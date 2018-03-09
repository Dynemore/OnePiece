<?php
//Kolom harus merupakan faktor dari 12
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  $numOfCols = 4;
  $rowCount = 0;
  $bootstrapColWidth = 12 / $numOfCols;

 ?>

<div class="row">
  <?php
    foreach ($rows as $row) {
  ?>
    <div class="col-md-<?php echo $bootstrapColWidth; ?>">
    </div>
  <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class = "row">';
    }
   ?>
</div>


<!-- <?php
  require_once('connect.php');
  if(isset($_POST) && !empty($_POST)){
    $query = "INSERT INTO moviehistory(title,description,release_date,rating,favorit_character) VALUES ('$_POST[title]','$_POST[description]','$_POST[releasedate]','$_POST[rating]','$_POST[favoritechar]')";
    $result = pg_query($query);
  }
 ?> -->
