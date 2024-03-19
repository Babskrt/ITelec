<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    
    <title>Register</title>
</head>
<body>
<main>
    <form action="Includes/Submit.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="Firstname">Firstame:</label>
            <input type="text" name="Firstname" id="Firstname">
        </div>
        <div>
            <label for="Lastname">Lastame:</label>
            <input type="text" name="Lastname" id="Lastname">
        </div>
        <div>
            <label for="Email">Email:</label>
            <input type="email" name="Email" id="Email">
        </div>
        <div>
            <label for="Password">Password:</label>
            <input type="password" name="Password" id="Password">
        </div>
        <div>
            <label for="Password2">Confirm Password:</label>
            <input type="password" name="Password2" id="Password2">
        </div>
        <div>
            <label for="Birthday">Birthday:</label>
            <input type="date" name="Birthday" id="Birthday">
        </div>
        <div>
            <label for="Mobile">Mobile Number:</label>
            <input type="number" name="Mobile" id="Mobile">
        </div>
        <button type="submit">Register</button>
    </form>
</main>
</body>
</html>


