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
    <h3>USER INPUT</h3>
    <form method="POST" action="process.php">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required> <br> <br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required> <br> <br>

        <button type="submit">Submit</button> <br>
    </form>
</body>
</html>