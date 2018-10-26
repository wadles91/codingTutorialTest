<?php
  include 'dbh.php';

  $commentNewCount = $_POST['commentNewCount'];

  $sql = "SELECT * FROM comments LIMIT $commentNewCount";
  $results = mysqli_query($link, $sql);
  if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
      echo "<h3>";
      echo $row['author'];
      echo "</h3>";
      echo "<br>";
      echo "<p>";
      echo $row['message'];
      echo "</p>";
    };
  } else {
    echo "There are no comments!";
  }
 ?>
