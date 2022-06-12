<?php
//変数の書き方 いきなり＄で記載を始めてOK.let とかconstとかいらない。
$name = "okugawa";
$year = 2022;
echo $name;

//文字列の結合
echo "私は".$name. "です";
// jsのときは・・・”私は" + name + "です"

// 違う書き方 これはダブルクオーテーションじゃないと動かない。
echo "私は{$name}です";
?>