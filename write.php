<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age  = $_POST["age"];
$c    = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$age;

//File書き込み
$file = fopen("data/data.txt","a");	// 追加書込み用のみで開く なければ作成
var_dump($file);
fwrite($file, $str."\n");  //.はプラス 書き込み "\n"改行コード ￥でバックスラッシュ \tはタブ
fclose($file);
header('Location:http://localhost/php01/read.php'); //read.phpファイルに画面遷移
exit;
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>  <!-- 上で作った文字が作れてるかpタグで確認 -->
<p><?=$str?></p>  
<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>