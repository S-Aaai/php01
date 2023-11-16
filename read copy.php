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
            background-color: lightblue;
    
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
            echo "<td>".$txt[$i][4]."</td>";
            echo "</tr>";
        }
    ?>
    
    <!-- //JASON PARSE -->
    <?php
    $file_name = "./data/data.txt";
    $ret_array = file ($file_name);
    // print_r($ret_array);

    $arr = json_encode($ret_array);
    print_r($arr);

        // const pollenData = str.split(',');
        // let html = "花粉症の有無：" + [3] + "<br>"; 
        // html = html + "重度：" + [4] + "<br>";
        //     // console.log([3]);
    ?>

    </table>
    <div style="width:30%; height:30%;">
        <canvas id="myChart"></canvas>
    </div>
    <p class="content"></p>


    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JQuery -->

    <!-- CDNでchart.jsをインストール -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
            type: 'doughnut',
            data: {
            labels: ['有', '無'],
            datasets: [{
                data: [15,15],
                borderWidth: 1
            }]
            }
        });


        //data.txtのデータを配列にする
        // const str = "2023-11-15 08:15:45,さと,test@tttttttttt,yes,1";
        // const pollenData = str.split(',');
        // let html = "花粉症の有無：" + [3] + "<br>"; 
        //     html = html + "重度：" + [4] + "<br>";
        //     // console.log([3]);
        //     document.body.innerHTML = html;
        

    //data.txtをjson形式に変換したものをparseする
    const js_array2 = JSON.parse(<?php echo $arr; ?>);
    console.log($arr);


    </script>

</body>
</html>

