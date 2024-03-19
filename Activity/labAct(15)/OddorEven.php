<!DOCTYPE html>
<html>
<head>
  <title>OddorEven</title>
</head>
<body>
<form method="POST" action="">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number">
    <input type="submit" name="submit" value="Check">
  </form>

    <?php
    //OddorEven
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
    
        if ($number % 2 == 0) {
          echo $number . " is an even number.";
        } else {
          echo $number . " is an odd number.";
        }
    }
    ?>
</body>
</html>
