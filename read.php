<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="read.css">
    <title>Document</title>
</head>
<body>
    


<?php

// ファイルを開く

$file = fopen("data/data.csv","r");


// ファイル内容を1行ずつ読み込んで出力
echo '<table border="1">
      <tr>
      <th>登録日時</th>
      <th>名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>好きなアニメ</th>
      <th>好きな声優</th>
      </tr>';

while ( $str = fgetcsv($file)){
    echo '<tr>';
    // テーブルセルに配列の値を格納
    for($i = 0; $i < count($str); $i++){
      echo '<td>'.$str[$i].'</td>';
    }
    echo '</tr>'; 

//短縮前
//   echo '<tr>';
//   echo '<td>'.$str[0].'</td>';
//   echo '<td>'.$str[1].'</td>';
//   echo '<td>'.$str[2].'</td>';
//   echo '<td>'.$str[3].'</td>';
//   echo '<td>'.$str[4].'</td>';
//   echo '<td>'.$str[5].'</td>';
//   echo '</tr>';  

};

echo '</table>';

// ファイルを閉じる
fclose($file);

// 関数：ファイル自体を削除

function remove1 (){
    unlink("data/data.csv");
    };

if(isset($_POST['remove1'])){function (){
    unlink("data/data.csv");
    };
};
// 関数：ファイル内データを削除
// function remove2 (){
//     $file = fopen("data/data.csv","w");
//     // flock($file, LOCK_EX);
//     ftruncate($file, 0);
//     // flock($file, LOCK_UN);
//     fseek($file, 0);
//     fclose($file);
// };

//こちらのクリックイベントの起動はうまくいかず。
// if(isset($_POST['remove'])) {
//     $file = fopen("data/data.csv","r+");
//     ftruncate($file, 0);
//     fseek($file, 0);
//     fclose($file);
// }


?>



<form action="index.php" >
    <input type="submit" name="remove1" value="ファイル削除1" onclick="document.write('<?php remove1() ?>');" />
    <button type="submit" name="remove1" value="ファイル削除2">ファイル削除2 </button>
</form>
<!-- //なぜかindex.phpに移動せず。またページをリロードするだけでファイルが削除されてしまう -->

<div><a href="index.php">戻る</a></div>



</body>
</html>