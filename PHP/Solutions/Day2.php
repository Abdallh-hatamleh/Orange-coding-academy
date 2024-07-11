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

function swap(&$str1, &$str2)
{
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;
}
// $x = 1;
// $y = 10;
// swap($x, $y);
// echo "X: $x , Y: $y";
function armstrong($val)
{
    $arr = strval($val);
    $temp = 0;
    for ($i = 0; $i < strlen($arr); $i++) {
        $temp += ($arr[$i] ** 3);
    }
    return $temp == $val;
}
function palindrome($str)
{
    return strtolower($str) == strrev(strtolower($str));
}

function removedupes(&$arr)
{
    $temp = [];
    foreach ($arr as $value) {
        if(!in_array($value, $temp)) $temp[] = $value;
    }
    $arr = $temp;
}
// $idk = [1,2,3,3,3,1,2,5,7];
// removedupes($idk);
// print_r($idk)
//FUNCTIONS END
function loop1()
{
    for ($i = 1; $i < 11; $i++)
{
    echo $i;
    if($i +1< 11) echo "-";
}
}
function loop2()
{
    $acc = 0;
    for ($i = 0; $i < 30; $i++) 
    {
        $acc += $i;
    }
    echo $acc;
}   
function loop3()
{
    for ($i = 0; $i < 5; $i++)
    {
        for ($j = 0; $j < 5; $j++)
        {
            echo "*";
            if(($j + 1 < 5)) echo "&nbsp;&nbsp;&nbsp;";
        }
        echo "<br>";
    }
}
function loop4(int $num) 
{
    $temp = $num;
    for ($i = $num -1 ; $i > 0; $i--)
    {
        $temp *= $i;
    }
    return $temp;
}
function loop5(int $num)
{
    $temp = [0,1];
    while(count($temp) <= $num)
    {
        $new = 0;
        for($i = count($temp) - 1; $i > count($temp) - 3; $i--)
        {
            $new += $temp[$i];
        }
        $temp[] = $new;
    }
    return $temp;
}
// $variable = loop5(20);
// foreach ($variable as $value) {
//     echo $value . " ,";
// }
function loop6($str, $char)
{   
    $str = strtolower($str);
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++)
    {
        if($str[$i] == strtolower($char)) $counter++;
    }
    return $counter;
}
// echo loop6("Orcange Coding acadecmy","c");
function loop7()
{
    echo "<table cellpadding='3px' cellspacing='0px' border='1px solid'>";
    for ($i = 1; $i < 11; $i++)
    {
        echo "<tr>";
        for ($j = 1; $j < 11; $j++)
        {
            echo "<td> $i * $j = ". ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
// loop7();
function loop8(int $num)    
{
    echo "<pre>";
    for ($i = 1; $i < $num + 1; $i++)
    {
        if($i % 3 == 0) 
        {
            echo "Fizz";
            if($i % 5 == 0) echo "Buzz";
        }
        else if($i % 5 == 0) echo "Buzz";
        else echo $i;
        echo "\n";
        // if($i % 50 == 0) echo "<";
    }
}
// loop8(100000);
?>