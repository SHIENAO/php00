<!--post通信では、入力したデーターがULRに反映されることはないが、データ自体は受け渡しがされている-->

<?php

function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

$name = $_POST["name"];
$mail = $_POST["mail"];
$color=$_POST["color"];
$family=$_POST["family"];


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前： <?= h( $name) ?>
EMAIL: <?= h($mail) ?>
好きな色: <?= h($color) ?>
家族の数: <?= h($family) ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>