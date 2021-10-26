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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Iterators</title>
</head>

<body>

  <header class="header">
    <a href="http://localhost:3000/print.php"><i class="fas fa-arrow-left"></i> </a>

    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Iterators</h1>
      <a href="https://www.php.net/manual/es/language.control-structures.php" target="_blank">Docs</a>

    </div>
    <a href="http://localhost:3000/operators.php"> <i class="fas fa-arrow-right"></i></a>

  </header>



  <div class="flex-row margin-top">
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