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

  <title>Maths</title>
</head>

<body>

  <header class="header">
    <a href="http://localhost:3000/types.php"> <i class="fas fa-arrow-left"></i></a>
    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Maths</h1>
      <a href="https://www.php.net/manual/en/ref.math.php" target="_blank">Docs</a>
    </div>
    <a href="http://localhost:3000/strings.php"><i class="fas fa-arrow-right"></i></a>
  </header>

  <div class="flex-row margin-top">
    <div class="card">
      <h5>abs()</h5>
      <?php
      $number= -4.2;
      echo abs($number);
      ?>
    </div>

    <div class="card">
      <h5>floor()</h5>
      <?php
      $number= -32.2;
      echo floor($number);
      ?>
    </div>

    <div class="card">
      <h5>max()</h5>
      <?php
      $array = [1,5,3,6,7,76,34,21];
      echo max($array);
      ?>
    </div>

    <div class="card">
      <h5>min()</h5>
      <?php
      $array = [1,5,3,6,7,76,34,21];
      echo min($array);
      ?>
    </div>

    <div class="card">
      <h5>rand()</h5>
      <?php

      echo rand();
      ?>
    </div>
  </div>



</body>

</html>