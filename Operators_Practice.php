<?php
    $num1 = 3;
    $num2 = 10;
    $addition = "Addition\n";
    $subtraction = "Subtraction\n";
    $mulitplication = "Multiplication\n";
    $division = "Division\n";

    $add = $num1 += $num2 ;
    echo $add; echo $addition;
    $minus =$num1 -= $num2;
    echo $minus; echo $subtraction;
    $times = $num1 * $num2;
    echo $times; echo $mulitplication;
    $divide = $num1 /= $num2;
    echo $divide; echo $division;

?>