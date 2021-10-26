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
  <title>Dates</title>
</head>

<body>

  <header class="header">
    <a href="http://localhost:3000/operators.php"><i class="fas fa-arrow-left"></i></a>

    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Dates</h1>
      <a href="https://www.php.net/manual/en/datetime.formats.php" target="_blank">Docs</a>
    </div>

    <a href="http://localhost:3000/conditionals.php"><i class="fas fa-arrow-right"></i></a>
  </header>

  <div class="flex-row margin-top">
    <div class="card">
      <h5>Date Time</h5>

      <?php
      $dateTime = new DateTime();
      echo $dateTime->format("Y,m,d")

      ?>

    </div>

    <div class="card">
      <h5>Date Time in Any Format</h5>

      <?php
      $dateTime = new DateTime();
      echo $dateTime->format("l, d-M-Y H:i:s T")

      ?>

    </div>

    <div class="card">
      <h5>Current Day</h5>

      <?php
      $dateTime = new DateTime();
      echo $dateTime->format("l");
      echo "<br>";
      echo $dateTime->format("d");

      ?>

    </div>

    <div class="card">
      <h5>Current Month Numeric</h5>

      <?php
      $dateTime = new DateTime();
      echo $dateTime->format("m")

      ?>

    </div>


    <div class="card">
      <h5>Current Minutes Leading 00</h5>

      <?php
      $dateTime = new DateTime();
      echo $dateTime->format("i")

      ?>


    </div>

  </div>

  </div>

</body>

</html>