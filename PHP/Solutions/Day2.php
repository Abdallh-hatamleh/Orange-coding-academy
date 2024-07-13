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
function loop9(int $num){

    $len = 1;
    $inline_count = 0;
    for ($i = 1; $i <= $num; $i++)
    {
        echo $i . " ";
        $inline_count++;
        if( $inline_count == $len)
        {
            echo "<br>";
            $len++;
            // echo "<script> console.log($len)</script>";
            $inline_count = 0;
        }
    }
}
// loop9(28)
// loop8(100000);
//END OF LOOPS FILE
function str1(&$str,$operation)
{
    switch ($operation)
    {
        case "up":
            $str = strtoupper($str);
            break;
        case "low":
            $str = strtolower($str);
            break;
        case "cap":
            $str[0] = strtoupper($str[0]);
            break;
        case "snake":
            $str = ucwords($str);
            break;
        default: 
        echo "<script> alert('method does not exist');</script>";
    }
}
// $tester = "hello world";
// str1($tester,"snake");
// echo $tester;
function str2(&$str)
{
    $str = wordwrap($str, 2, ":", true);
}
// $time = "111111";
// str2($time);
// echo $time;
function str3($str,$needle) {
    if(str_contains($str, $needle))   { 
    echo "yes it exists";
    }
    else echo "no it doesn't";
}
// str3("sdfaac orange asdcasd","orange asdw");
function str4($str) {
    $temp = explode("/", $str);
    return $temp[count($temp) -1];
}
function str5($str) {
    
    $temp = explode("@", $str);
    return $temp[0];
}
function str6($str) 
{
    return substr($str,strlen($str) - 3,3);

}
// echo str6("asfasdfgsdfgasd.com");

function str7($str) {
return substr(str_shuffle($str),0,str_shuffle("56789")[0]);
}
// echo str7("helloWodfgndfghdfg2534rf456rld");
function str8($str, $toreplace, $new) {
    return str_replace($toreplace, $new, $str);
}
// echo str8("the new trainee", "the", "our");
function str9($str,$str2) {
    error_reporting(0);
    $max = strlen($str);
    if (strlen($str) < strlen($str2)) {
        $max = strlen($str2);
    }
    for ($i = 0; $i < $max; $i++) {
        if($str[$i] != $str2[$i]) return $i;
    }
}
function str10($str) {
    return explode(" ", $str);
}
function str11($str) {
    if (strlen($str) != 1) return "ERROR NOT A SINGLE CHAR";
    $alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $curindex = array_search(strtoupper($str), $alphabet);
    if ($curindex == count($alphabet) - 1) {
        return "A";
    }
    return $alphabet[$curindex + 1];
}

function str12($str, $toadd, $beginning, $end) {
    $newsubstr = $beginning . " " . $toadd . " " . $end;
    $oldsubstr = $beginning . " " . $end;
    return str_replace($oldsubstr,$newsubstr,$str);
}
function str12part2($str) {
    $temp = explode(" ", $str);
    return $temp[0];
}
function str13($num)
{
    $num = strval($num);
    $num = str_replace("0","",$num);
    if(str_contains($num,".")) return floatval($num);
    return intval($num);
}
function str14($str, $toremove) {
    return str_replace($toremove,"",$str);
}

function str15($str)
{
    $temp = "";
    for ($i = 0; $i < strlen($str) ; $i++)
    {
        if($str[$i] != "-") $temp .= $str[$i];
        else
        {
            for ($j = $i; $j < strlen($str); $j++)
            {
                if(($str[$j + 1] == "-") || ($j + 1) == strlen($str) ) 
            }
        }
    }
}
// echo str15("hello-----");
// echo str14("the quick brown fox jumps over the lazy dog", "fox");
// echo str13(20002.225102);
// echo str12("the brown fox","quick","the","brown");
// echo str11("h");
// var_dump( str10("twinkle twinkle little star"));
// echo str9("hello","hellos");
// echo str8("hello world idk");
?>