<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Arrays</title>
</head>

<body>

  <header class="header">

    <div class="flex-row-header">
      <a href="http://localhost:3000/strings.php"><i class="fas fa-arrow-left"></i></a>
      <div class="bola">
        <img src="assets/Profile - Testing.png" width="150" alt="">
        <h1>Arrays</h1>
        <a href="https://www.php.net/manual/en/language.operators.php" target="_blank">Docs</a>
      </div>
      <a href="http://localhost:3000/print.php"><i class="fas fa-arrow-right"></i></a>

    </div>
  </header>

  <div class="flex-row margin-top">

    <div class="card">
      <h5>Print an array with strings</h5>
      <?php
      $fruits = array("Apple", "Banana", "Mango");
      echo "<br>";
      echo "<pre>";
      print_r($fruits);
      echo "</pre>";
      ?>
    </div>

    <div class="card">
      <h5>Print an array with numbers </h5>
      <?php
      $numbers = array(4, 7, 6.5, 9.7,);
      echo "<br>";
      echo "<pre>";
      print_r($numbers);
      echo "</pre>";
      ?>
    </div>

    <div class="card">
      <h5>Print an multidimensional array </h5>
      <?php
      $b = array('a' => 'Alfredo', 'b' => 'Tupac', 'c' => array('x', 'y', 'z'));
      print_r($b);
      ?>
    </div>

    <div class="card">
      <h5>Count the length of the array</h5>
      <?php
      $numbers = array(4, 7, 6.5, 9.7,);
      echo "<br>";
      print_r($numbers);
      $length = count($numbers);
      echo "length of array: {$length}";
      ?>

    </div>

    <div class="card">
      <h5>Combining two arrays</h5>
      <?php
      print_r($numbers = array(1, 2, 3, 4));
      echo "<hr>";

      print_r($people = array("Joan", "Manu", "Pau", "Christian"));

      echo "<hr>";
      print_r(array_combine($numbers, $people));


      ?>

    </div>
  </div>

</body>

</html>