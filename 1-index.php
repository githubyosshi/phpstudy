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

// $myArray = array("Rob","Kirten","Tommy","Ralphie");
// print_r($myArray); //print readable
// echo "<br><br>";
// echo $myArray[1];
// echo "<br><br>";

// $anotherArray[0] = "pizza";
// $anotherArray[1] = "chocolate";
// $anotherArray[5] = "coffee";

// print_r($anotherArray);

// echo "<br><br>";

// $anotherArray["mayFavorite"] = "ice cream";

// print_r($anotherArray);
// $thirdArray = array("France" => "French",   "USA" => "English",   "Germany" => "German");

// echo "<br><br>";
// print_r($thirdArray);

// 個数
// echo "<br><br>";
// echo sizeof($thirdArray);

// 削除
// unset($thirdArray["France"]);
// echo "<br><br>";
// print_r($thirdArray);
// echo sizeof($thirdArray);

// $role = "guest";
// $position = "director";
// if($role == "admin"){
// if($role == "admin" && $position == "director"){

// $role = "admin";
// $position = "manager";
// if($role == "admin" || $position == "director"){
//   echo "<p>管理画面に進んでください。</p>";
// } else {
//     echo "<p>あなたは管理者ではないので、ここから先には進めません。</p>";
// }

// for($i = 0;$i < 10;$i++){
//   echo $i."<br>";
// }

// for($i = 2;$i <= 30;$i++){
//   echo $i.",";
// }
// echo "<br><br>";
// for($i = 10;$i >= 0;$i--){
//   if ($i == 0){
//     echo $i;
//   } else {
//     echo $i.",";
//   }
// }
// echo "<br><br>";
// $family = array("Rob","Kirsten","Tommy","Ralphie");
// for($i = 0; $i < sizeof($family);$i++){
//   echo $family[$i].",";
// }
// echo "<br><br>";
// foreach($family as $key => $value){
//   // echo $key.":".$value.",";
//   $family[$key] = $value." Percival";
//   echo $family[$key].",";
// }

// $i = 0;
// while($i < 10){
//   echo $i."<br>";
//   $i++;
// }
// $family = array("Rob","Kirsten","Tommy","Ralphie");
// $i = 0;
// while($i < sizeof($family)){
//   echo $family[$i]." Percival, ";
//   $i++;
// }

// http://localhost/phpstudy/1-index.php?name=rob&gender=sam
// print_r($_GET);
// echo "こんにちは、".$_GET['name']."さん";
if($_POST){
  echo "こんにちは、".$_POST['name']."さん";
} else {
}

?>

<p>お名前を入力してください：</p>
<!-- <form> -->
<form method="post">
  <input type="text" name="name">
  <input type="submit" value="返信する">
</form>