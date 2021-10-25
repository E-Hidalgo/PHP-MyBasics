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
  <h5>Iterator FOR</h5>
  <?php
for($i = 0; $i<5; $i++){
  echo "<p>Kike is {$i} crema.</p>\n";
}
    ?>


  <!-- ----------- FOREACH LOOP ---------- -->

  <h4>Iterator FOREACH</h4>
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






</body>

</html>