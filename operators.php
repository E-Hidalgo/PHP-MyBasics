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
  <title>Operators</title>
</head>

<body>
  <header class="header">
    <a href="http://localhost:3000/iterators.php"><i class="fas fa-arrow-left"></i></a>

    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Operators</h1>
      <a href="https://www.php.net/manual/en/language.operators.php" target="_blank">Docs</a>
    </div>
    <a href="http://localhost:3000/dates.php"><i class="fas fa-arrow-right"></i></a>
  </header>


  <!-- ----------- ADD, SUBSTRACT, REST, MULTIPLY, DIVIDE, OPERATORS ---------- -->
  <div class="flex-row margin-top">
    <div class="card">
      <h4>Adding integer numbers</h4>
      <?php
        $a = 4;
        $b = 3;
        var_dump($a + $b);
       ?>
    </div>

    <div class="card">
      <h4>Resting integer numbers</h4>
      <?php
        $a = 4;
        $b = 3;
        var_dump($a - $b);
      ?>
    </div>

    <div class="card">
      <h4>Multiplying float numbers</h4>
      <?php
$a = 4.5;
$b = 3.1;
var_dump($a * $b);
?>
    </div>

    <div class="card">
      <h4>Dividing float numbers</h4>
      <?php
$a = 37.5;
$b = 5.2;
var_dump($a / $b);
?>
    </div>


    <div class="card">
      <h4>Rest integer numbers</h4>
      <?php
$a = 37.5;
$b = 5.2;
var_dump($a % $b);
?>
    </div>
  </div>

  <!-- ----------- ==, !=, >,<,>=,<= OPERATORS ---------- -->

  <div class="flex-row">

    <div class="card">
      <h4>Comparison Operator == </h4>
      <?php
    $number =3;
    $anotherNumber = 3;
    if($number ==  $anotherNumber)
    {
      echo $number;
      echo "<br>";
      echo $anotherNumber;
      echo "<br>";
      echo "Variables are equal";
    }
    ?>

    </div>

    <div class="card">
      <h4>Comparison Operator !== </h4>
      <?php
    $number =3;
    $boolean = true;
    if($number !==  $boolean)
    {
      echo $number;
      echo "<br>";
      echo $boolean;
      echo "<br>";
      echo "Variables are not equal";
    }
    ?>

    </div>

    <div class="card">
      <h4>Comparison Operator < </h4>
          <?php
    $number =3;
    $anotherNumber = 6;
    if($number <  $anotherNumber)
    {
      echo $number;
      echo "<br>";
       echo $anotherNumber;
       echo "<br>";
       echo "First variable is < than second";
    }
    ?>

    </div>

    <div class="card">
      <h4>Comparison Operator > </h4>
      <?php
    $number =9;
    $anotherNumber = 6;
    if($number >  $anotherNumber)
    {
     echo $number;
     echo "<br>";
      echo $anotherNumber;
      echo "<br>";
      echo "First variable is > than second";
    }
    ?>

    </div>

    <div class="card">
      <h4>Comparison Operator > </h4>
      <?php
    $number = 6;
    $anotherNumber = 6;
    if($number <=  $anotherNumber)
    {
     echo $number;
     echo "<br>";
      echo $anotherNumber;
      echo "<br>";
      echo "First variable is <= than second";
    }
    ?>

    </div>

    <div class="card">
      <h4>Comparison Operator > </h4>
      <?php
    $number = 6;
    $anotherNumber = 6;
    if($number >=  $anotherNumber)
    {
     echo $number;
     echo "<br>";
      echo $anotherNumber;
      echo "<br>";
      echo "First variable is >= than second";
    }
    ?>

    </div>


  </div>
</body>

</html>