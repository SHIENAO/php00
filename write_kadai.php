<?php
$name =$_POST["name"];
$mail=$_POST["mail"];
$color=$_POST["color"];
$family=$_POST["family"];
//カンマを入れる処理
$c = ",";

//文字作成
//上記記入情報の取得
$str = $c.$name.$c.$mail.$c.$color.$c.$family;
$dates = array($name,$mail,$color,$family);

//File書き込み
 //fopenでファイルを開く、fwriteでファイル書き込み、fcloseでファイルを閉じる
$file = fopen("data/data.txt","a");	// ファイル読み込み
// \nは改行。
fwrite($file, $str."\n");
fclose($file);

$filename = "data.txt";
//読み込むファイルを読み込みモードで開く(fopen r)
$fp = fopen("data/data.txt", "r");
//whileで行末までループをさせて中身全てを取得する
while (!feof($fp)){
    // fgetsでファイルを読み込み、変数に格納する。
    $txt = fgets($fp);
    //ファイルを読み込んだ変数を出力する
    //echo $txt.'<br>';

   
}
fclose($fp);
?>




<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/kadai.css">
<title>アンケート結果</title>
</head>
<body>

<ul class="list">
<!-- foreachでファイルの配列をループ処理 -->
<?php foreach ($dates as $date): ?>
    <li class="first"><span class=”dan”>アンケート結果</li>
    <li class="next"><span class=”dan1”>名前:<?php echo $dates[0];?></span> </li>
    <li class="next"><span class=”dan2″>メールアドレス：<?php echo $dates[1];?></span></li>
    <li class="next"><span class=”dan3″>好きな色：<?php echo $dates[2];?></span></li>
    <li class="next"><span class=”dan4″>家族の数：<?php echo $dates[3];?></span></li>
        
    <?php endforeach; ?>

<ul>

<li><a href="kadai.php">戻る</a></li>
</ul>

</body>
</html>