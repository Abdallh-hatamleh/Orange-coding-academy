<?php
//day1-b file
//TASK 1
//1
$fruits = ["apple", "pear", "orange", "lime"];
//2
foreach ($fruits as $x) {
    print $x . "<br>";
}
echo "<hr>";
//3
array_push($fruits, "pineapple");
foreach ($fruits as $x) {
    print $x . "<br>";
}
echo "<hr>";
//4
array_pop($fruits);
foreach ($fruits as $x) {
    print $x . "<br>";
}
//5
echo "<hr>";
var_dump(in_array("apple", $fruits));
echo "<br> <hr> <br>";
//Task 2
//1 & 2
$keyval = [
    "ahmad" => 30,
    "mohammed" => 12,
    "khaled" => 22
];
print_r($keyval);
echo "<hr>";
//3
$keyval["jaafar"] = 39;
print_r($keyval);
echo "<hr>";
//4 
unset($keyval["ahmad"]);
print_r($keyval);
echo "<hr>";
//5
var_dump(array_key_exists("khaled", $keyval));
echo "<hr>";
//Task 3
//1 & 2 
$twoDimension = [
    ["abed", 25, 89],
    ["ala", 28, 100],
    ["abood", 24, 50],
];
foreach ($twoDimension as $b) {
    foreach ($b as $a) {
        echo $a . ",";
    }
    echo "<br>";
}
echo "<hr>";
// 3
array_push($twoDimension, ["mohammed", 30, 28]);
foreach ($twoDimension as $b) {
    foreach ($b as $a) {
        echo $a . ",";
    }
    echo "<br>";
}
echo "<hr>";
//4 
$twoDimension[0][2] = 70;
foreach ($twoDimension[0] as $o) {
    echo $o . ",";
}
echo "<hr>";
//5
unset($twoDimension[1]);
foreach ($twoDimension as $b) {
    foreach ($b as $a) {
        echo $a . ",";
    }
    echo "<br>";
}
echo "<hr>";
//Task 4
$keys = array_keys($keyval);
$values = array_values($keyval);
echo "array count: " . count($keyval) . "<br>";
$merged = array_merge($fruits, ["potato", "corn", "wheat"]);
echo "search function: " . array_search("potato", $merged) . "<br>";
sort($merged);
ksort($keyval);
asort($keyval);
foreach ($keyval as $a) {
    echo $a . ",";
}
echo "<hr>";
//day1-i file
//Task1
//1 & 2 
$cities = [
    "aqaba", "new york", "maastricht", "khartoum",
    "doha", "shenzhen", "amman", "ohio", "toronto", "zarqa"
];
for ($i = (count($cities) - 1); $i >= 0; $i--) {
    echo $cities[$i] . ", ";
}
echo "<hr>";
// 3
echo "Ohio is number:" . array_search("ohio", $cities);
echo "<hr>";
//4 
function notohio($str)
{
    return $str != "ohio";
}
$cities = array_filter($cities, "notohio");
foreach ($cities as $c) {
    echo $c . ", ";
}
echo "<hr>";
//5 
$cities = array_slice($cities, 0, 3);
foreach ($cities as $c) {
    echo $c . ", ";
}
echo "<hr>";
//Task 2 
//1 & 2
$products = [
    "shampoo" => 1.2,
    "soap" => 0.5,
    "bleach" => 0.8,
    "floorCleaner" => 1
];
ksort($products);
print_r($products);
echo "<hr>";
//3
asort($products);
print_r($products);
echo "<hr>";
//4 
$acc = 0;
foreach ($products as $pr) {
    $acc += $pr;
}
echo "average price = " . ($acc / (count($products)));
echo "<hr>";
//5
function getmax($v1, $v2)
{
    if ($v1 > $v2) {
        return $v1;
    } else {
        return $v2;
    }
}
echo "highest price is: " . array_reduce($products, "getmax");
echo "<hr>";
//Task 3
//1 & 2
$library = [
    ["Angels & demons", "Dan Brown", 2000],
    ["Das kapital", "Karl Marxx", 1867],
    ["Iron Widow", "Xiran Jay Zhao", 2021]
];
foreach ($library as $book) {
    if ($book[2] > 2010) {
        foreach ($book as $stat) {
            echo $stat . " ,";
        }
        echo "<br>";
    }
}
echo "<hr>";
//3 
array_push($library, ["1984", "George Orwell", 1949]);
foreach ($library as $book) {
    foreach ($book as $detail) {
        echo $detail . " ";
    }
    echo "<br>";
}
echo "<hr>";
//4
$library[1][1] = "Karl marxx and the spirit of the working class";
foreach ($library as $book) {
    foreach ($book as $detail) {
        echo $detail . " ";
    }
    echo "<br>";
}
echo "<hr>";
//5 
$key_values = array_column($library, 0);
array_multisort($key_values, SORT_ASC, $library);
foreach ($library as $book) {
    foreach ($book as $detail) {
        echo $detail . " ";
    }
    echo "<br>";
}
echo "<hr>";
//Task 4 
$upper = array_map("strtoupper", $cities);

foreach ($upper as $detail) {
    echo $detail . " ";
}

echo "<hr>";
function addQ(&$item, $key)
{
    $item = $item . "Q";
}
array_walk($cities,'addQ');
foreach ($cities as $detail) {
    echo $detail . " ";
}
$cities = [
    "aqaba", "new york", "maastricht", "khartoum",
    "doha", "shenzhen", "amman", "ohio", "toronto", "zarqa"
];

echo "<hr>";
$cities2 = ["aqaba","doha","amman","shenzhen","mafraq"];
$cities3 = ["rome","karak","amman","shenzhen","mafraq"];
print_r( array_diff($cities, $cities2));
echo "<hr>";
print_r( array_intersect($cities, $cities2));
echo "<hr>";
print_r( array_combine($cities3, $cities2));
echo "<hr>";
if(in_array("aqaba",$cities2))
{
    echo "DONE";
}