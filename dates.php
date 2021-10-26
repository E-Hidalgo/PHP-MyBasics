<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Dates</title>
</head>

<body>
  <h1>Dates</h1>
  <a href="http://localhost:3000/operators.php">Operators</a>
  <a href="https://www.php.net/manual/en/datetime.formats.php" target="_blank">Official Website</a>
  <a href="http://localhost:3000/conditionals.php">Conditionals</a>


  <div class="flex-row">
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