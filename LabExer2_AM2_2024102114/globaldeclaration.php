<?php
    $globalLabel = "Student Details: ";
    $globalFooter = "Copyright 2025";

    function local(): void {

        global $globalLabel;

        $number = 123;
        $name = "May";

        echo $globalLabel . "<br>";
        echo "Name: " . $name . "<br>" . "Number: " . $number. "<br>";
        echo $GLOBALS["globalFooter"];
    }

    local();
?>