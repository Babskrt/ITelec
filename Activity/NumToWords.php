<!DOCTYPE html>
<html>
<head>
  <title>Number to Words</title>
</head>
<body>
  <form method="POST" action="">
    <label for="number">Enter a number (up to 1000):</label>
    <input type="number" id="number" name="number" min="0" max="1000">
    <br>
    <input type="submit" name="submit" value="Convert">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    function numberToWords($number) {
      $ones = array(
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine'
      );

      $tens = array(
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety'
      );

      $hundreds = array(
        100 => 'One Hundred',
        200 => 'Two Hundred',
        300 => 'Three Hundred',
        400 => 'Four Hundred',
        500 => 'Five Hundred',
        600 => 'Six Hundred',
        700 => 'Seven Hundred',
        800 => 'Eight Hundred',
        900 => 'Nine Hundred'
      );

      if ($number < 10) {
        return $ones[$number];
      } elseif ($number < 20) {
        return $tens[$number];
      } elseif ($number < 100) {
        $tensDigit = (int)($number / 10) * 10;
        $onesDigit = $number % 10;
        $result = $tens[$tensDigit];
        if ($onesDigit > 0) {
          $result .= '-' . $ones[$onesDigit];
        }
        return $result;
      } elseif ($number < 1000) {
        $hundredsDigit = (int)($number / 100) * 100;
        $tensDigit = $number % 100;
        $result = $hundreds[$hundredsDigit];
        if ($tensDigit > 0) {
          $result .= ' and ' . numberToWords($tensDigit);
        }
        return $result;
      } elseif ($number === 1000) {
        return 'One Thousand';
      } else {
        return 'Number out of range';
      }
    }

    $inputNumber = (int) $_POST['number'];
    $output = numberToWords($inputNumber);
    echo 'The number in words is: ' . $output;
  }
  ?>

</body>
</html>