<?php 
session_start();
if (isset($_SESSION["counter"]))
{
$_SESSION['counter'] = $_SESSION['counter'] + 1;
echo "<h1> This page was refreshed: ". $_SESSION['counter'] . "Times";
}
else
{
    $_SESSION['counter'] = 0;
}