<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
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