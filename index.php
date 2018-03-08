<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h2>Self Movie List</h2>
    <div class="container">
    <form action="" method="post">
      <div class="form-group">
          <label for="title">Title :</label>
          <input class="form-control" type="text" id="title" name="title" placeholder="Insert Movie Title">
      </div>
      <div class="form-group">
          <label for="description">Description :</label>
          <textarea class="form-control" id="description" name="description" rows="5" placeholder="What is the movie about?"></textarea>
      </div>
      <div class="form-group">
          <label for="date">Release Date :</label>
          <input class="form-control" type="date" id="releasedate" name="releasedate" placeholder="Enter the release date">
      </div>
      <div class="form-group">
          <label for="rating">Rating :</label>
          <input class="form-control" type="number" id="rating" name="rating" placeholder="Rate the movie by yourself!">
      </div>
      <div class="form-group">
          <label for="favoritechar">Favorite Character :</label>
          <input class="form-control" type="text" id="favoritechar" name="favoritechar" placeholder="What is your favorite character in the movie?">
      </div>
      <button type="submit" class="btn btn-primary" name="input">Submit</button>
    </form>
  </div>
  </body>
</html>

<?php
  require_once('connect.php');
  if(isset($_POST) && !empty($_POST)){
    $query = "INSERT INTO moviehistory(title,description,release_date,rating,favorit_character) VALUES ('$_POST[title]','$_POST[description]','$_POST[releasedate]','$_POST[rating]','$_POST[favoritechar]')";
    $result = pg_query($query);
  }
 ?>
