<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Operators</title>
</head>

<body>
  <h1>Operators</h1>
  <a href="http://localhost:3000/iterators.php">Iterators</a>
  <a href="https://www.php.net/manual/en/language.operators.php" target="_blank">Official Website</a>
  <a href="http://localhost:3000/dates.php">Dates</a>


  <!-- ----------- ADD, SUBSTRACT, REST, MULTIPLY, DIVIDE, OPERATORS ---------- -->
  <div class="flex-row">
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