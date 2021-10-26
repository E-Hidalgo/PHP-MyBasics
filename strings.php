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

  <title>Strings</title>
</head>

<body>
  <header class="header">
    <div class="flex-row-header">
      <a href="http://localhost:3000/maths.php"><i class="fas fa-arrow-left"></i></a>
      <div class="bola">
        <img src="assets/Profile - Testing.png" width="150" alt="">
        <h1>Strings</h1>
        <a href="https://www.php.net/manual/en/language.operators.php" target="_blank">Docs</a>
      </div>
      <a href="http://localhost:3000/arrays.php"><i class="fas fa-arrow-right"></i></a>
    </div>
  </header>

  <div class="flex-row margin-top">

    <div class="card">
      <h5>echo</h5>
      <?php
      echo "<h3>This is a text string</h3>"
      ?>
    </div>


    <div class="card">
      <h5>Variable from String</h5>

      <?php
      $text = "<h3>This is a string but from a variable</h3>";
      echo $text;
      ?>
    </div>

    <div class="card">
      <h5>Put a variable inside a String</h5>

      <?php
      $text = "<h4><strong>This is the string variable</strong></h4>";
      echo "This is a text and {$text}";
      ?>
    </div>

    <div class="card">
      <h5>str_replace()</h5>

      <?php
      $text = "<h4><strong>This is the string variable</strong></h4>";
      $result = str_replace("variable", "with replaced variable", $text);
      echo $result;
      ?>
    </div>

    <div class="card">
      <h5>str_ireplace()</h5>
      <?php
      $text = "<h4><strong>This is the string Variable</strong></h4>";
      $result = str_ireplace("variable", "with replaced Variable", $text);
      echo $result;
      ?>
    </div>
  </div>

  <div class="flex-row">

    <div class="card">
      <h5>str_repeat()</h5>
      <?php
      $text = "Tupac";
      $repeat = str_repeat($text . "<br>", 7);
      echo $repeat;
      ?>

    </div>

    <div class="card">
      <h5>strlen()</h5>
      <?php
      $text = "Tupac";
      echo "Length of string: " . $text . "<br>";
      $length = strlen($text);
      echo $length;
      ?>

    </div>

    <div class="card">
      <h5>strpos()</h5>
      <?php
      echo $text = "This number is in position: 28 in this string" . "<br>";
      $found = "28";
      $find = strpos($text, $found);
      echo "Position found: {$find} :)";
      ?>

    </div>

    <div class="card">
      <h5>strtoupper()</h5>
      <?php
      echo $text = "Tupac" . "<br>";
      echo "To uppercase" . "<br>";
      $toUper = strtoupper($text);
      echo $toUper;
      ?>

    </div>

    <div class="card">
      <h5>strtolower()</h5>
      <?php
      echo $text = "TUPAC AMARU SHAKUR" . "<br>";
      echo "to lower case" . "<br>";
      $toLower = strtolower($text);
      echo $toLower;
      ?>

    </div>

    <div class="card">
      <h5>substr()</h5>
      <?php
      echo $text = "Tupac is really good, amigo";
      echo  "<br>";
      echo "Here substr() takes only 'amigo'" . "<br>";
      $cut = substr($text, -5);
      echo $cut;
      ?>

    </div>
  </div>

</body>

</html>