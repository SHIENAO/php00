<?php
$name =$_POST["name"];
$mail=$_POST["mail"];
//カンマを入れる処理
$c = ",";

//文字作成
//日付の取得
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail;
//File書き込み
 //fopenでファイルを開く、fwriteでファイル書き込み、fcloseでファイルを閉じる
// $file = fopen("data/data.txt","a");	// ファイル読み込み
// \nは改行。
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>