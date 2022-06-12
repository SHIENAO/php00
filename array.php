<?php
//配列の復習
//a,b,cの配列を作って、
$arr = ["a","b","c"];
//配列を追加できる。jsで必要であった、.pushは不要
$arr[] = "d";

//echoで0番目を呼び出す↓
//echo $arr[0];

//配列を順番に縦に並べる
echo "<pre>";

//配列の中身を見るときには以下のように記載する
var_dump($arr);
echo "</pre>"

$str = "one, two, three";
$result = explode(",",$str);
echo "<pre>";
var_dump($result);
echo "</pre>";

?>