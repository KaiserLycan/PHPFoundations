<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submission</title>
</head>
<body>
<h3>USER FEEDBACK</h3>
<form method="POST" action="feedback.php">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username" required> <br> <br>

    <label for="comments">Comments</label>
    <textarea name="comments" id="comments" required></textarea> <br> <br>

    <label>Rating: </label> <br>
    <input type="radio" name="rating" id="rating1" value="1">
    <label for="rating1">1 (Poor)</label> <br>
    <input type="radio" name="rating" id="rating2" value="2">
    <label for="rating2">2 (Good)</label> <br>
    <input type="radio" name="rating" id="rating3" value="3">
    <label for="rating3">3 (Excellent)</label> <br> <br>

    <button type="submit">Submit Feedback</button> <br>
</form>
</body>
</html>