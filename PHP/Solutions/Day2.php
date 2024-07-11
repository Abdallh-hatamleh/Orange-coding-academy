<?php 
function checkPrime($num)
{
    if ($num <= 0) {
        return "number is not prime";  
    }

    if ($num == 1 || $num == 2) return "number is prime";

    for ($i = 3; $i < $num; $i++) {
        if (($num % $i) == 0) return "number is not prime";
    }
    return "number is prime";
}

function reverseStr($str)
{
    $temp = "";
    for ($i = strlen($str) - 1 ; $i >= 0; $i--) {
        $temp .= $str[$i];
    }
    return $temp;
}
function isAllLower($str)
{
    $uppers = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    foreach ($uppers as $upper) {
        if (str_contains($str,$upper)) return "not all lower";
    }
    return "all lower";
}
echo isAllLower("hiIii");
?>