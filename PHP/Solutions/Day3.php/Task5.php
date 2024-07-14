<?php 
echo $_SERVER['SCRIPT_NAME'];
$idk = explode("/",$_SERVER['SCRIPT_NAME']);

echo "<br>";
echo $idk[1];
?>