<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Validation</title>
</head>
<body>
    <h3>LOG-IN FORM</h3>
    <form method="POST">
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required> <br> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        if($password == "admin123"){
            echo "Login successful!";
        }
        else {
            echo "Invalid password!";
        }
    }
?>