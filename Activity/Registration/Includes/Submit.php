<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $password2 = $_POST['Password2'];
        $birthday = $_POST['Birthday'];
        $mobile = $_POST['Mobile'];

        echo "Succes";

        if(empty($Firstname) || empty($Lastname)
            || empty($Email) || empty($Password) || empty($Password2)
            || empty($Birthday) || empty($Mobile)) {
            header("Location: ../Register.php");
            exit();
        }

        // echo $firstname;
        // echo "<br>";
        // echo $lastname;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $password;
        // echo "<br>";
        // echo $password2;
        // echo "<br>";
        // echo $birthday;
        // echo "<br>";
        // echo $mobile;
        // echo "<br>";
    } else{
        echo "Denied";
    }
?>