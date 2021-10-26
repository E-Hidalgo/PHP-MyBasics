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

  <title>Print</title>
</head>

<body>
  <header>
    <div class="header">
      <a href="http://localhost:3000/arrays.php"><i class="fas fa-arrow-left"></i></a>
      <div class="bola">
        <img src="assets/Profile - Testing.png" width="150" alt="">
        <h1>Print Function</h1>
        <a href="https://www.php.net/manual/en/language.operators.php" target="_blank">Docs</a>
      </div>
      <a href="http://localhost:3000/iterators.php"><i class="fas fa-arrow-right"></i></a>

    </div>
  </header>

  <div class="flex-row margin-top">
    <div class="card">
      <h2>
        <?php
echo "This is my first line in PHP using echo"
?>
      </h2>

    </div>

    <div class="card">
      <h3>
        <?php
print "This is my second line in PHP using print"
?>
      </h3>

    </div>


    <div class="card">
      <pre>
  <?php
$a = array ("Mavericks", "J-Bay", "Teahupoo");
print_r ($a);
?>
</pre>

    </div>

    <div class="card">
      <pre>
      <?php
$b = array ('a' => 'Alfredo', 'b' => 'Tupac', 'c' => array ('x', 'y', 'z'));
print_r ($b);
?>
      </pre>
    </div>
  </div>


</body>

</html>