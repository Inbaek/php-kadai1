<?php

// $man = $_POST['man'];
// $sex = $_POST['sex'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$anime = $_POST['anime'];
$seiyu = $_POST['seiyu'];
$sex = implode(", ", $_POST["sex"]);

//文字列作成（日付）
$time = date("Y-m-d H:i:s");

//データを変数にまとめる

$array = ["$time","$name","$sex","$mail", "$anime", "$seiyu"];
$file = fopen("data/data.csv","a"); //対象のファイルを開く

fputcsv($file,$array); //ファイルにデータを書き込む

fclose($file);

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>ご協力ありがとうございました！</h1>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>