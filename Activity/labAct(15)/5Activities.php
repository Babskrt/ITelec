<!DOCTYPE html>
<html>
<head>
  <title>5 Operation Activity</title>
</head>
<body>
  <h2>Number Operations</h2>
  <form method="POST" action="">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number">
    <br><br>
    <input type="submit" name="submit" value="Check">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    // Check if the number is odd or even
    echo "<h3>Check Odd or Even:</h3>";
    if ($number % 2 == 0) {
      echo $number . " is an even number.";
    } else {
      echo $number . " is an odd number.";
    }

    // Find the greatest number
    echo "<h3>Greatest Number:</h3>";
    $numbers = array($number, 15, 8); // Example numbers
    $max = max($numbers);
    echo "The greatest number among " . implode(", ", $numbers) . " is " . $max;

    // Print numbers from the given number to zero
    echo "<h3>Print Numbers:</h3>";
    echo "Numbers from " . $number . " to 0: ";
    for ($i = $number; $i >= 0; $i--) {
      echo $i . " ";
    }

    // Check if the number is prime
    echo "<h3>Check Prime Number:</h3>";
    $isPrime = true;
    if ($number < 2) {
      $isPrime = false;
    } else {
      for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
          $isPrime = false;
          break;
        }
      }
    }
    if ($isPrime) {
      echo $number . " is a prime number.";
    } else {
      echo $number . " is not a prime number.";
    }

    // Output numbers divisible by 3 and 5
    echo "<h3>Divisible by 3 and 5:</h3>";
    echo "Numbers divisible by 3 and 5 from 1 to " . $number . ": ";
    $divisibleNumbers = array();
    for ($i = 1; $i <= $number; $i++) {
      if ($i % 3 == 0 && $i % 5 == 0) {
        $divisibleNumbers[] = $i;
      }
    }
    echo implode("-", $divisibleNumbers);
  }
  ?>
</body>
</html>