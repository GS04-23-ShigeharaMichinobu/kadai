<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>データ表示</title>
</head>
<body>
<?php
$fp = @fopen("data/data.csv", "r");  //ファイルを開く
flock($fp, LOCK_SH);                      //ファイルロック
while ($array = fgetcsv( $fp )) {
      $num = count($array);
      for($i=0; $i<$num; $i++){
          echo $array[$i];
      }
}
flock($fp, LOCK_UN);            //ロック解除
fclose($fp);                          //ファイルを閉じる
?>

</body>
</html>
