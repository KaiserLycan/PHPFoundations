<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<br><br>";
    echo "<h3> Student Details </h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}

?>