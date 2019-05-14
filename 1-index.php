<?php

// $name = "Rob";
// echo $name;
// echo "<p>私の名前は、".$name."です。</p>";
// echo "<p>私の名前は${name}です。</p>";

// $myNumber = 45;
// echo "<p>番号：${myNumber}</p>";
// $calc = $myNumber * 31 / 97 + 4;
// echo "<p>計算結果：${calc}";

//ブーリアン true, false
// $myBool = true;
// echo "<p>現在の状態は、${myBool}です。</p>";

// $myBool = false;
//値が入っていないnullなので空白になる
// echo "<p>現在の状態は、${myBool}です。</p>";

$myArray = array("Rob","Kirten","Tommy","Ralphie");
print_r($myArray); //print readable
echo "<br><br>";
echo $myArray[1];
echo "<br><br>";

$anotherArray[0] = "pizza";
$anotherArray[1] = "chocolate";
$anotherArray[5] = "coffee";

print_r($anotherArray);

echo "<br><br>";

$anotherArray["mayFavorite"] = "ice cream";

print_r($anotherArray);
$thirdArray = array("France" => "French",   "USA" => "English",   "Germany" => "German");

echo "<br><br>";
print_r($thirdArray);

// 個数
echo "<br><br>";
echo sizeof($thirdArray);

// 削除
unset($thirdArray["France"]);
echo "<br><br>";
print_r($thirdArray);
echo sizeof($thirdArray);

?>