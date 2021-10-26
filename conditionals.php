<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">

  <title>Conditionals</title>
</head>

<body>
  <h1>Conditionals</h1>
  <a href="http://localhost:3000/print.php">Print</a>
  <a href="https://www.php.net/manual/es/control-structures.intro.php" target="_blank">Official Website</a>
  <a href="http://localhost:3000/operators.php">Operators</a>

  <div class="flex-row">
    <div class="card">
      <h5>Condition: are we on Monday?</h5>
      <?php
      $weekDay = new DateTime("l");
      if( $weekDay->format("l") == "Monday") {
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
      if( $month->format("F") == "October") {
        echo "We are in October";
      } else {
        echo "We are in {$month->format("F")}";
      }
      ?>
    </div>



    <div class="card">
      <h5>Condition: current min < 10?</h5>
          <?php
      $currentMin = new DateTime("i");
      if( $currentMin->format("i") < 10) {
        echo "The current minute is less than 10";
      }else if($currentMin->format("i") > 15) {
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
        $currentDay= new DateTime("l");

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