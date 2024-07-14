<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="em">Email: </label>
        <input type="text" id="em" name="email">
        <br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "<h1> with post</h1>";
        echo "<p>Your email is: " .  $_POST['email'] . "</p>" ;   
    }
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        echo "<h1> with GET</h1>";
        if (isset($_GET['email'])) echo "<p>Your email is: " .  $_GET['email'] . "</p>" ;   
    }
    ?>
</body>
</html>