<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Variables</title>
  </head>
  <body>

    <form method="get">
      <input type="text" name="person">
      <input type="submit">
    </form>
<?php
 $name=$_GET['person'];
 $age="27";
 echo "Hello ",$name," you are ",$age;
 echo "<br>";
 echo $name." is a handsome fellow!";


?>

  </body>
</html>
