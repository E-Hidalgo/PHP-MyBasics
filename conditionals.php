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

  <title>Conditionals</title>
</head>

<body>

  <header class="header">
    <a href="http://localhost:3000/dates.php"><i class="fas fa-arrow-left"></i></a>
    <div class="bola">
      <img src="assets/Profile - Testing.png" width="150" alt="">
      <h1>Conditionals</h1>
      <a href="https://www.php.net/manual/es/control-structures.intro.php" target="_blank">Docs</a>
    </div>
    <a href="http://localhost:3000/types.php"><i class="fas fa-arrow-right"></i></a>
  </header>




  <div class="flex-row margin-top">
    <div class="card">
      <h5>Condition: are we on Monday?</h5>
      <?php
      $weekDay = new DateTime("l");
      if ($weekDay->format("l") == "Monday") {
        echo "We are on Monday";
      } else {
        echo "Today is {$weekDay->format("l")}";
      }
      ?>
    </div>

    <div class="card">
      <h5>Condition: are we in October?</h5>
      <?php
      $month = new DateTime("F");
      if ($month->format("F") == "October") {
        echo "We are in October";
      } else {
        echo "We are in {$month->format("F")}";
      }
      ?>
    </div>



    <div class="card">
      <h5>Condition: current min < 10 or>15?</h5>
      <?php
      $currentMin = new DateTime("i");
      if ($currentMin->format("i") < 10) {
        echo "The current minute is less than 10";
      } else if ($currentMin->format("i") > 15) {
        echo "The current minute is more than 15";
      } else {
        echo "Does not meet any condition";
        echo "<br>";
        echo "We are in minute: {$currentMin->format("i")}";
      }

      ?>
    </div>

    <div class="card">
      <h5>Switch Case for Week Days</h5>
      <?php
      $currentDay = new DateTime("l");

      switch ($currentDay->format("l")) {
        case "Monday":
          echo "Wtf... is Monday";
          break;

        case "Tuesday":
          echo "Wtf... still Tuesday";
          break;

        case "Wednesday":
          echo "Wtf... almost Friday, Midweek";
          break;

        case "Thursday":
          echo "THURSDAY :D";
          break;

        case "Friday":
          echo "Friday :D";
          break;

        case "Saturday":
          echo "Yeaaaah saturday :D";
          break;

        case "Sunday":
          echo "Lord's day";
          break;

        default:
          echo "Is not working";
          break;
      }
      ?>
    </div>
  </div>

</body>

</html>