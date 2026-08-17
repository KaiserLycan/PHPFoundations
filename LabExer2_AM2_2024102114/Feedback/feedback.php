<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = htmlspecialchars($_POST["username"]);
        $comments = htmlspecialchars($_POST["comments"]);
        $rating = htmlspecialchars($_POST["rating"]);

        echo "USER FEEDBACK <br>";
        echo "Username: " . $username . "<br>";
        echo "Comments: " . $comments . "<br>";
        echo "Rating: " . $rating . "/3<br>";
    }
?>