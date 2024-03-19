<!DOCTYPE html>
<html>
<head>
  <title>Greatest Number</title>
</head>
<body>
  <form method="POST" action="">
    <label for="number1">Number 1:</label>
    <input type="number" id="number1" name="number1">
    <br>
    <label for="number2">Number 2:</label>
    <input type="number" id="number2" name="number2">
    <br>
    <label for="number3">Number 3:</label>
    <input type="number" id="number3" name="number3">
    <br>
    <input type="submit" name="submit" value="Find the Greatest">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];

    $greatestNumber = max($number1, $number2, $number3);

    echo "Among $number1, $number2, and $number3, the greatest number is: $greatestNumber";
  }
  ?>

</body>
</html>