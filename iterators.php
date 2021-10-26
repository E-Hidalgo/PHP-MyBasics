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
  <title>Document</title>
</head>

<body>

  <!-- ----------- FOR LOOP ---------- -->
  <h3>Iterator FOR</h3>
  <?php
for($i = 0; $i<5; $i++){
  echo "<p>Kike is {$i} crema.</p>\n";
}
    ?>

  <!-- ----------- FOREACH LOOP ---------- -->

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

  <!-- ----------- WHILE LOOP ---------- -->
  <h3>Iterator While</h3>
  <?php

$i = 1;
while ($i <= 10) {
    echo $i++;  
}
?>

  <!-- ----------- DO-WHILE LOOP ---------- -->
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
</body>

</html>