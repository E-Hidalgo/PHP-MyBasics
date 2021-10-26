<!-- Generate a snippet that makes use of for
Generate a snippet that makes use of foreach
Generate a snippet that uses while
Generate a snippet that uses do while -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">

  <title>Iterators</title>
</head>

<body>

  <h1>Iterators</h1>
  <a href="http://localhost:3000/print.php">Print</a>
  <a href="https://www.php.net/manual/es/language.control-structures.php" target="_blank">Official Website</a>
  <a href="http://localhost:3000/operators.php">Operators</a>


  <div class="flex-row">
    <!-- ----------- FOR LOOP ---------- -->
    <div class="card">
      <h3>Iterator FOR</h3>
      <?php
for($i = 0; $i<5; $i++){
  echo "<p>Kike is {$i} crema.</p>\n";
}
    ?>
    </div>


    <!-- ----------- FOREACH LOOP ---------- -->
    <div class="card">
      <h3>Iterator FOREACH</h3>
      <p>
        <?php
    echo "Array [3,6,9,12] multiplied by 2"
    ?>
      </p>

      <?php
   $numbers = array(3,6,9,12);
   foreach($numbers as $value){
  $value = $value * 2;
  echo "$value\n";
  unset($value);
}
    
    ?>
    </div>
  </div>

  <div class="flex-row">
    <!-- ----------- WHILE LOOP ---------- -->

    <div class="card">
      <h3>Iterator While</h3>
      <?php

$i = 1;
while ($i <= 10) {
    echo $i++;  
}
?>
    </div>


    <!-- ----------- DO-WHILE LOOP ---------- -->
    <div class="card">
      <h3>Iterator Do-While</h3>
      <p>First example</p>
      <?php

$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
      <p>Second example</p>


      <?php
do {
    if ($i < 5) {
        echo "i is not enough high";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "i is ok";


} while (0);
?>
    </div>

  </div>

</body>

</html>