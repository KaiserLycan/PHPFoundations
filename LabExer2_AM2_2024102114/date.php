<?php
    echo "<h1>Hello world! </h1>";
    echo "<h3>Hello Universe!</h3>";

    // This is a comment
    /*
     * This is a multiline comment
     *
     * */

    echo date("Y");
    echo "<br>";

    echo "Displaying current year <br>";
    echo date("Y"). "<br>";

    echo date("y"). "<br>";

    echo "AD ". date("Y"). "<br>";
    echo "Year " . date("Y"). "<br>";
    echo "Week's starting year " . date("Y", strtotime("Monday this week")). "<br>";

    echo  "Displaying current date". "<br>";
    echo "Today is ". date("Y-m-d"). "<br>";
    echo "Today is ". date("M j, Y"). "<br>";
    echo "Today is ". date("l, M j, Y"). "<br>";
    echo "Today is ". date("m/d/y"). "<br>";
    echo "Today is ". date("d-m-Y"). "<br>";
    echo "Today is ". date("c"). "<br><br>";

    echo 5 + 3;

    echo "<h1>My favorite fruits </h1>
            <ol>
                <li> Apple </li>
                <li> Banana </li>
                <li> Chico </li>
            </ol>
    ";

    echo " \"The journey of a thousand miles begins with one step.\" - Lao Tzu ";

    $name = "Alice";
    $age = 25;

    $value = 42;
    $value = "PHP";

    $Name = "May";
    $name = "Bautista";

    function local(): void {
        $number = 123;
        $name = "May";

        echo "Name: " . $name . "<br>" . "Number: " . $number;
    }

    local();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br><br>
<button>Click to Enter</button>

</body>
</html>