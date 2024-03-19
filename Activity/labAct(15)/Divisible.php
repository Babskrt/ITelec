<!DOCTYPE html>
<html>
<head>
  <title>Print Integers</title>
</head>
<body>
  <form method="POST" action="">
    <label for="number">Enter a positive integer:</label>
    <input type="number" id="number" name="number" min="1">
    <br>
    <input type="submit" name="submit" value="Print">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $number = $_POST['number'];

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
  }
  ?>
</body>
</html>

