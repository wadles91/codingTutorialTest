<?php
 include 'dbh.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Getting Data from a Database using AJAX</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <script>
      //jQuery code here!
      $(document).ready(function(){
        var commentCount =2;
        $("button").click(function(){
           commentCount = commentCount + 2;
          $("#comments").load("load-comments.php", {
            commentNewCount: commentCount
          });
        });
      });
    </script>
  </head>
  <body>

    <div id="comments">
      <?php
        $sql = "SELECT * FROM comments LIMIT 2";
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
    </div>

    <button>Show more comments</button>

  </body>
</html>
