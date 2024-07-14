<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter numbers : </label>
        <br>
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operation" id="">
            <option value="*">*</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit">
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        switch ($_POST["operation"])
        {
            case "*": 
                echo "Result: ". $_POST["num1"] * $_POST["num2"];
                break;
            case "-":
                echo "Result: ". $_POST["num1"] - $_POST["num2"];
                break;
            case "+":
                echo "Result: ". $_POST["num1"] + $_POST["num2"];
                break;
            case "/":
                echo "Result: ". $_POST["num1"] / $_POST["num2"];
                break;
        }
    }
    ?>
</body>
</html>