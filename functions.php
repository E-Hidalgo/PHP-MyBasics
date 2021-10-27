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
  <title>Functions</title>
</head>

<body>
  <header class="header">
    <a href="http://localhost:3000/arrays.php"><i class="fas fa-arrow-left"></i> </a>

    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Functions</h1>
      <a href="https://www.php.net/manual/es/language.functions.php" target="_blank">Docs</a>

    </div>
    <a href="http://localhost:3000/print.php"><i class="fas fa-arrow-right"></i></a>


  </header>

  <div class="flex-row margin-top">

    <div class="card">
      <h5>Create a function that returns the sum of two values</h5>

      <?php
      function add($a, $b)
      {
        $result =  $a + $b;
        return $result;
      }
      echo "8 + 4 = " . $sum = add(8, 4)
      ?>
    </div>

    <div class="card">
      <h5>Create a function that returns the sum of two values</h5>
      <?php
      function multiply($a, $b)
      {
        $result =  $a * $b;
        return $result;
      }
      echo "8 * 4 = " . $multiply = multiply(8, 4)
      ?>
    </div>

    <div class="card">
      <h5>Create a function that returns the sum of two values</h5>
      <?php
      function division($a, $b)
      {
        $result =  $a / $b;
        return $result;
      }
      echo "8 / 4 = " . $division = division(8, 4)
      ?>
    </div>

    <div class="card">
      <h5>Create a function that returns the sum of two values</h5>
      <?php
      function operator($a, $b, $operator)
      {
        $result = 0;
        if ($operator == "+") {
          $result = $a + $b;
        } else if ($operator == "*") {
          $result = $a * $b;
        } else if ($operator == "/") {
          $result = $a / $b;
        }
        return $result;
      }

      echo $superFunction = "31 + 32 = " . operator(31, 23, "+") . "<hr>";
      echo $superFunction = "2 * 2 = " . operator(2, 2, "*") . "<hr>";
      echo $superFunction = "35 / 5 = " . operator(35, 5, "/") . "<hr>";
      ?>
    </div>
  </div>
</body>

</html>