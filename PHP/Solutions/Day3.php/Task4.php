<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="title" required>Title: </label><br>
    <input type="text" name="title" id="title">
    <br>
    <input type="submit" value="create">
    </form>
    <br>
    <?php 
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $title = "";
        if (isset($_POST["title"])) {
                $title = $_POST["title"]; 
        if (!empty($_SESSION['tasks']))
        {
            $_SESSION['tasks'][] = $_POST['title'];
        }
        else {
            $_SESSION['tasks'] = [];
            $_SESSION['tasks'][] = $_POST['title'];
        }
        }
        if (isset($_POST['delete']))
        {
            unset($_SESSION['tasks'][$_POST['delete']]);
        }
    }
    if (!empty($_SESSION['tasks']))
    {
        echo '<ol>';
        foreach ($_SESSION['tasks'] as $index => $value) {
            echo '<li>' . $value . "<form method='POST'> <input type='hidden' name='delete' value='$index'> <input type='submit' value='delete'></form> </li>";
            # code...
        }
        echo "</ol>";
    }

    ?>
</body>
</html>