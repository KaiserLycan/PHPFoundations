<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown Selection</title>
</head>
<body>
    <h3>FAVORITE COLOR</h3>
    <form method="POST">
        <label for="color">Choose your favorite color: </label>
        <select name="color" id="color">
            <option value="Red">Red</option>
            <option value="Yellow">Yellow</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
        </select> <br> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = $_POST['color'];
        echo "<br><br>USER'S FAVORITE COLOR <br><br>";
        echo "You selected: " . $color . ".";
    }
?>