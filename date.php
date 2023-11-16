<?php
//ベルギーの時間
// $y = date("Y年m月d日 H:i:s");
// echo $y
$y = date("s");
if($y>30){
    $b = ' style="background-color:#F00;"';
}else{
    $b = ' style="background-color:#00F;"';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?=$b?>>
    <?=$b?>
    <table>
        <tr>
            <td><?=$a[0]?><td>
            <td><?=$a[1]?></td>
            <td><?=$a[2]?></td>
        </tr>
    </table>
</body>
</html>