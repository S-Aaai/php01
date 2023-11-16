<?php

// 変数$filenameにdata/data.txtを代入
$filename = 'data/data.txt'; 

// fopen関数でファイルを開く（'r'は読み込みモードで開く）
//fpファイルポインタはファイル内の位置を指定する変数
    //file data読み書きするため
$fp = fopen($filename, 'r');

//＊配列の準備
$txt = [];

while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp)); 
}
fclose($fp);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        background-color: #FF0000;
    }
    </style>
</head>
<body>
    <table>

<?php 
//＊ここで表示処理
for($i=0; $i<count($txt)-1;$i++){
        echo "<tr>";
        echo "<td>".$txt[$i][0]."</td>";
        echo "<td>".$txt[$i][1]."</td>";
        echo "<td>".$txt[$i][2]."</td>";
        echo "<td>".$txt[$i][3]."</td>";
        echo "</tr>";
}
?>

    </table>
</body>
</html>