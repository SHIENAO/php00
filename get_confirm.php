<?php
//name とmailを取り出すための変数を定義する。
$name = $_GET["name"];
$mail = $_GET["mail"];



?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前：<?= $name ?>
Mail：<?= $mail ?> 
<!-- <?php echo $mail; ?>と同義。 -->
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>