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

    // echo "Numbers from $number to 0: ";
    
    for ($i = $number; $i >= 0; $i--) {
      echo $i . " ";
    }
  }
  ?>

</body>
</html>