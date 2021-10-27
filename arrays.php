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
        <a href="https://www.php.net/manual/en/book.array.php" target="_blank">Docs</a>
      </div>
      <a href="http://localhost:3000/functions.php"><i class="fas fa-arrow-right"></i></a>


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
      <h5>count()</h5>
      <?php
      $numbers = array(4, 7, 6.5, 9.7,);
      echo "<br>";
      print_r($numbers);
      $length = count($numbers);
      echo "length of array: {$length}";
      ?>

    </div>

  </div>

  <div class="flex-row">

    <div class="card">
      <h5>array_combine()</h5>
      <?php
      $numbers = array(1, 2, 3, 4);
      print_r($numbers);
      echo "<hr>";
      $names = array("Manu", "Alberto", "Alfredo", "Tupac");
      print_r($names);
      echo "<hr>";
      $combine = array_combine($numbers, $names);
      print_r($combine);
      ?>

    </div>

    <div class="card">
      <h5>end()</h5>
      <?php
      echo "<pre>";
      print_r($numbers = array(1, 2, 3, 4));
      echo "</pre>";
      echo "<hr>";
      echo "This is the last position: " . end($numbers);
      ?>
    </div>

    <div class="flex-row">
      <div class="card">
        <h5>array_push()</h5>
        <?php
        $numbers = array("Alfredo", "Tupac", "Manu", "Pau");
        print_r($numbers);
        echo "<hr>";
        echo "This is new array length: ";
        print_r(array_push($numbers, "Snoop Dog"));
        echo "<hr>";
        print_r($numbers);
        ?>
      </div>

    </div>

</body>

</html>