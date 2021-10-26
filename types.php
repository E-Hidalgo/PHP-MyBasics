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

  <title>Types</title>
</head>

<body>
  <header class="header">
    <a href="http://localhost:3000/conditionals.php"><i class="fas fa-arrow-left"></i></a>

    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Types</h1>
      <a href="https://www.php.net/manual/en/language.types.php" target="_blank">Docs</a>

    </div>
    <a href="http://localhost:3000/maths.php"><i class="fas fa-arrow-right"></i></a>

  </header>


  <div class="flex-row margin-top">
    <div class="card">
      <?php
      $boolean = true;
      $integer = 4;
      $float = 2.3;
      $string = "This is a string";
      $array = [5, 3, 2, 6, 1];
      $null = null;

      echo  gettype($boolean) . ": {$boolean} = " . "true";
      echo "<br>";
      echo "Integer: {$integer}";
      echo "<br>";
      echo "Float: {$float}";
      echo "<br>";
      echo "String: {$string}";
      echo "<br>";
      echo "Array: ";
      print_r($array);
      echo "<br>";
      echo "Null: {$null}";
      ?>

    </div>
  </div>
</body>

</html>