<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkbox Input</title>
</head>
<body>
<h3>HOBBIES</h3>
<form method="GET">
    <label for="checkbox">Select your hobbies: </label> <br>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading <br>
    <input type="checkbox" name="hobbies[]" value="Travelling"> Travelling <br>
    <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking <br> <br>

    <button type="submit">Submit</button>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['hobbies'])) {
        $hobbies = $_GET['hobbies'];
        echo "<br><br>You selected the following hobbies: " . implode(", ", $hobbies) . "<br>";
    }
    else {
        echo "<br> No hobbies selected<br>";
    }
}
?>