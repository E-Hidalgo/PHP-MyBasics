<!-- Generate an instruction that makes use of "echo"
Generate an instruction that makes use of "print"
Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">

  <title>Print</title>
</head>

<body>
  <h1>Print Function</h1>
  <a href="https://www.php.net/manual/en/language.operators.php" target="_blank">Official Website</a>
  <a href="http://localhost:3000/iterators.php">Iterators</a>

  <h2>
    <?php
echo "This is my first line in PHP using echo"
?>
  </h2>

  <h3>
    <?php
print "This is my second line in PHP using print"
?>
  </h3>

  <pre>
  <?php
$a = array ("Mavericks", "J-Bay", "Teahupoo");
print_r ($a);
?>
</pre>

  <pre>
  <?php
$b = array ('a' => 'Alfredo', 'b' => 'Tupac', 'c' => array ('x', 'y', 'z'));
print_r ($b);
?>
</pre>

  <pre>
  <?php
$c = array ('a' => 'Alfredo', 'b' => 'Tupac', 'c' => array ('x', 'y', 'z'));
print_r ($c);
?>
</pre>

</body>

</html>