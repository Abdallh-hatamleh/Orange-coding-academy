<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Search: </label>
        <input type="url" name="url">
        <br>
        <input type="submit">
    </form>
    <?php 
    if ( $_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header("Location:" . $_POST['url']);
        exit();
    }
    ?>
</body>
</html>