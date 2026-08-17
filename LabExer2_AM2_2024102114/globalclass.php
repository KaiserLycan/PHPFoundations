<?php
    $globalLabel = "Student Details: ";
    $globalFooter = "Copyright 2025";

    class Student {
        function local(): void {

            global $globalLabel;

            $number = 123;
            $name = "May";

            echo $globalLabel . "<br>";
            echo "Name: " . $name . "<br>" . "Number: " . $number. "<br>";
            echo $GLOBALS["globalFooter"];
        }
    }

    $obj = new Student();
    $obj->local();

    $name = "Alice";
    $age = 25;
    $height = 5.7;
    $isStudent = true;
    $colors = ["Red", "Green"];

    echo "Name: $name\n <br>";
    echo "Age: $age\n <br>";
    echo "Height: $height\n <br>";
?>