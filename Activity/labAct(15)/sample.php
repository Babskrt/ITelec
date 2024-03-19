<!DOCTYPE html>
<html>
    <head>
    <title>Positive Integers</title>
    </head>
<body>
    <form method="post">
        <label for="Enter">Enter</label>
        <input type="Enter" name="Enter">
        </br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
        <?php

        if (isset($_POST['submit'])) {
        $Enter = $_POST['Enter'];
        $divisiblenumber = array();
        for($i=1; $i<=$Enter; $i++){
        if($i % 3 == 0 || $i % 5 == 0){
        $divisiblenumber[] = $i;
        }
        }
        echo implode("-", $divisiblenumber);
        }

    ?>

</body>
</html>