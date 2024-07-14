<form action="" method="post">
    <input type="hidden" name="cookie1" value="abdallh">
    <input type="submit" value="1">
</form>
<form action="" method="post">
    <input type="hidden" name="cookie2" value="abdallah">
    <input type="submit" value="2">
</form>
<form action="" method="post">
    <input type="hidden" name="cookie3" value="abdullah">
    <input type="submit" value="3">
</form>

<?php 
if ($_SERVER['REQUEST_METHOD' ] == 'POST') {
    if (isset($_POST['cookie1'])) {
        setcookie('cookie1', $_POST['cookie1'], time() + (86400 * 365),'/');
    }
    else if (isset($_POST['cookie2'])) {
        setcookie('cookie2', $_POST['cookie2'], time() + (86400 * 365),'/');
    }
    else if (isset($_POST['cookie3'])) {
        setcookie('cookie3', $_POST['cookie3'], time() + (86400 * 365),'/');
    }
}
if (!empty($_COOKIE))
{
    foreach ($_COOKIE as $key => $value) {
        echo "<h2> $key : $value </h2>";
        # code...
    }
}
