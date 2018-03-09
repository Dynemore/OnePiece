<?php
  include_once('connect.php');

  if(isset($_POST['input']) && !empty($_POST)){
    $title = $_POST['title'];
    $description= $_POST['description'];
    $release_date= $_POST['releasedate'];
    $rating = $_POST['rating'];
    $favorite_char= $_POST['favoritechar'];
    $query = "INSERT INTO moviehistory(title,description,release_date,rating,favorit_character) VALUES ('$title','$description','$release_date','$rating','$favorite_char')";
    $result = pg_query($query);
    }
 ?>
