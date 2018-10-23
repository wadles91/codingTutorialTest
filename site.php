<html>
<head>
  <meta charset="utf-8">
  <title>PHP Code Camp</title>
</head>

<body>
  <h2> 1. Learning Echo</h2>
    <?php
      echo ("<h1>David's Site</h1>");
      echo ("<hr>");
      echo ("<p>This is my site</p>");
    ?>
    <br>
    <br>

  <h2> 2. Learning Variables </h2>
    <?php
      $charactername = "Tom";
      $characterage = 80;
      echo "There once was a man named $charactername <br>";
      echo "He was $characterage years old <br>";
      echo "He really liked the name $charactername <br>";
      echo "But didn't like being $characterage <br>";
    ?>
    <br>
    <br>

  <h2> 3. Data Types </h2>
    <?php
      $phrase = "To be or not to be";
      $age = 30;
      $gpa = 30.3;
      $isMale = false;

      echo "String: plain text $phrase<br>

      ";
      echo "Integer: whole numbers $age<br>";
      echo "Decimal: numbers with decimal$gpa<br>";
      echo "Boolean: true or false $isMale<br>";
    ?>
    <br>
    <br>

  <h2> 4. Strings </h2>
    <?php
      $phrase = "Giraffe Academy";
      echo $phrase;
      echo "<br>";
      echo strtolower($phrase);
      echo "<br>";
      echo strtoupper($phrase);
      echo "<br>";
      echo strlen($phrase);
      echo "<br>";
      echo str_replace("Giraffe", "Panda", $phrase);
      echo "<br>";
      echo $phrase[0];
      echo "<br>";
      echo substr($phrase, 8);
      echo "<br>";
      echo substr($phrase, 3, 9);
    ?>
    <br>
    <br>

  <h2> 5. Working With Numbers </h2>
    <?php
      echo -40.847;
      echo "<br>";
      echo 5+9;
      echo "<br>";
      echo 10 % 3;
      echo "<br>";
      echo (4+5) *10;
      echo "<br>";
      $num = 10;
      $num++;
      echo $num;
      echo "<br>";
      echo abs(-100);
      echo "<br>";
      echo pow(2,4);
      echo "<br>";
      echo sqrt(2);
    ?>
    <br>
    <br>

  <h2> 6. Getting User Input </h2>

    <form action="site.php" method="get">
      Name: <input type="text" name="name"> <br>
      Age: <input type="number" name="age">
      <input type="submit">
      <br>
      <?php
        echo $_GET["name"]; echo "<br>";
        echo $_GET["age"];
      ?>
    </form>
    <br>
    <br>

  <h2> 7. Building a Basic Calculator </h2>
    <form action="site.php" method="get">
      <input type="number" name= "num1"><br>
      <input type="number" name="num2"><br>
      <input type="submit">
    Answer:<?php
    echo $_GET["num1"] + $_GET["num2"];
    ?>
    <br>
    <br>

  <h2> 8. Create Your Own Madlibs </h2>

    <form action="site.php" method="get">
      Color: <input type=text name="color"><br>
      Plural noun: <input type=text name="Pluralnoun"><br>
      Celebrity: <input type=text name="celebrity"><br>
      <input type="submit">

    <?php
      $color = $_GET[color];
      $pluralNoun = $_GET[Pluralnoun];
      $celebrity = $_GET[celebrity];
      echo "Roses are $color <br>";
      echo "$pluralNoun are blue <br>";
      echo "I love $celebrity <br>";
    ?>
    <br>
    <br>

  <h2> 9. URL Parameters </h2>
    <!--This can be used on web pages to add specific info in the URL without
    asking users for it. This is usefull in cases such as advanced search so
    that users can bookmark to store specific values in the URL.-->
    <form action="site.php" method="get">
      Name: <input type="text" name="name"> <br>
      <input type="submit">
      <br><br>
    <?php
      echo $_GET[name];
      echo "****".substr($_GET[name], 4);
      echo $_GET[age];
    ?>
    <br><br>

  <h2> 10. POST vs GET </h2>
    When using GET any data entered into the form will appear in the URL
    as a URL parameter. For data types such as a password this is not secure.
    For secure data you will want to use the POST method. This is going to do
    the exact same thing as GET except it won't show up in the URL.
    <br><br>

  <h2> 11. Arrays </h2>

    Array is a container or structure to store multiple pieces of information
    as opposed to a variable where you can only store a single piece of data.
    There is no limit to the number of variables that you can store in an array.

    <?php
      $friends = array("Evelyn", "David", "Jordan", "Ethan", "Jackson", "Anahi");
       echo "<br>";
       echo count ($friends);
    ?>
    <br><br>

  <h2> 12. Using Checkboxes </h2>

    <form action="site.php" method="get">
      Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
      <input type="submit">
    </form>
    <br>
    <?php
      $fruits = $_GET["fruits"];
      echo $fruits;
     ?>
     <br><br>

  <h2> 13. Associative Arrays </h2>
    Associative arrays are special arrays that can store not only data values
    but it can store key value pairs. It can store multiple linked data values.
    This allows you to access data using a key instead of index position
    <br>
    <form action="site.php" method="get">
      <input type="text" name="student">
      <br>
      <input type="submit">
    </form>
    <?php
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
      echo "<br>";
      echo $grades[$_GET["student"]];
    ?>
    <br><br>

  <h2> 14. Functions </h2>
    A function is a special container where we can put a code that is
    designed to perform a specific task. This is helpful if you have a code
    that you want repeated throughout your page multiple times.
    <br>

    <?php
      function sayHi($name, $age){
        echo "Hello $name, you are $age";
      }
      sayHi("David", "27");
      sayHi("Anahi", "23");
      sayHi("Evelyn", "26");
      sayHi("Jordan", "23");

     ?>
     <br><br>

  <h2> 15. Return Statements </h2>

    Functions can not only get information but give information back. Return
    statements will break you out of the function.<br>

    <?php
      function cube($num){
        return $num*$num*$num;
      }
      echo cube(4);
    ?>
    <br><br>

  <h2> 16. If Statements </h2>

    <?php
      $isMale = true;
      $isTall = true;
      if ($isMale && $isTall){
        echo "You are a tall male";
      } elseif($isMale && !$isTall) {
        echo "You are a short male";
      } elseif(!$isMale && $isTall) {
        echo "You are a tall female";
      } else {
        echo "You are a short female";
      }
     ?>
     <br><br>

  <h2> 17. If Statements (Comparisons) </h2>

    <?php
      function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
          return $num1;
        } elseif($num2 >= $num1 && $num2 >= $num3){
          return $num2;
        } else{
          return $num3;
        }
      }
      echo getMax(300, 90, 400);
    ?>
    <br><br>

  <h2> 18. Building a Better Calculator</h2>

    <form action="site.php" Method="get">
      First num:<input type="number" step="0.1" name="num1"><br>
      OP:<input type="textbox" name="op"><br>
      Second num:<input type="number" step="0.1" name="num2"><br>
      <input type="submit">
    </form>

    <?php
      $num1 = $_GET["num1"];
      $num2 = $_GET["num2"];
      $op = $_GET["op"];

      if($op == "+"){
        echo $num1 + $num2;
      } elseif($op == "-"){
        echo $num1 - $num2;
      } elseif($op == "/"){
        echo $num1 / $num2;
      } elseif($op == "*"){
        echo $num1 * $num2;
      } else {
        echo "Invalid Operator";
      }
    ?>
    <br><br>

  <h2> 19. Switch Statements</h2>

    <form action="site.php" method="get">
      What was your grade?<br>
      <input type="text" name="grade"><br>
      <input type="submit">
    </form>

    <?php
      $grade = $_GET["grade"];
      switch($grade){
        case "A":
        echo "Congratulation! You did great!";
        break;
        case "B":
        echo "Good Job! You did well.";
        break;
        case "C":
        echo "You could do better.";
        break;
        case "D":
        echo "You really need to work harder.";
        break;
        case "F":
        echo "I'm sorry, you fail.";
        break;
        default:
        echo "Invalid grade entered";
      }
    ?>
    <br><br>

  <h2> 20. While Loops</h2>
    Be careful not to create an infinite loop!<br>
    With "while" in the front the loop only triggers when the condition is met,
    but with "do while" loops the loop triggers first then checks the condition to
    continue.<br>
    <?php
      $index = 6;
      do{
        echo "$index<br>";
        $index++;
      }while($index<=5);
    ?>
    <br><br>

  <h2> 21. For Loops </h2>
    Loops are great for printing out all the data in an array.<br>
   <?php
    $luckyNumbers = array(4, 8, 16, 18, 23, 42);

      for($i = 0; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>";
      }
    ?>
    <br><br>

  <h2> 22. Comments </h2>

   <?php
    //comments are fun and can be created with 2 forward slashes.

    echo "Comments are fun! you can use // to create a single line comment or
    /* */ will comment over all lines between the *'s. These can be used to
    comment out code that is seeming to cause issues to test what happens when that
    code doesn't exist without having to delete the entire code.";
    ?>
    <br><br>

  <h2> 23. Including HTML </h2>
      Using the include statment allows us to create another file inside our
      php file.<br>
    <?php include "header.html" ?>
    <p> Hello World!</p>
    <?php include "footer.html" ?>
    <br><br>

  <h2> 24. Include - PHP </h2>
    This allows you to create dynamic php. <br>
    <?php
      $title = "My First Post";
      $author = "David";
      $wordCount = 400;
      include "article-header.php";
     ?>
     <br><br>

  <h2> 25. Classes & Objects </h2>

    <!--<?php /*
      class Book {
        var $title;
        var $author;
        var $pages;
      }
      $book1 = new Book();
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 400;

      $book2 = new Book();
      $book2->title = "Lord of the Rings";
      $book2->author = "JR Tolkien";
      $book2->pages = 700;

      echo $book1->title;
      */
     ?>
     <br><br> -->

  <h2> 26. Constructors </h2>

    <?php
      class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
          $this->title =$aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }
      $book1 = new Book("Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Lord of the Rings", "JR Tolkien", 700);

      echo $book1->title;

      ?>
      <br><br>

  <h2> 27. Object Functions </h2>

    <?php
      class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
          $this->name= $name;
          $this->major=$major;
          $this->gpa=$gpa;
        }

        function hasHonors(){
          if($this->gpa>=3.5){
            return "true";
          }
          return "false";
        }
      }

      $student1= new Student("Jim", "Business", 2.8);
      $student2= new Student("Pam", "Art", 3.6);

      echo $student2->hasHonors();
      ?>
      <br><br>

  <h2> 28. Getters and Setters </h2>

    <?php
      class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
          $this->title = $title;
          $this->rating = $rating;
        }

        function getRating(){
          return $this->rating;
        }
        function setRating(){
          $this->rating =$rating;
        }
      }

      $avengers = new Movie("Avengers", "PG-13");

      echo $avengers-> getRating();

     ?>

</body>
</html>
