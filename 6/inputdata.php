<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
</head>
<body>

<?php
echo date("Y年m月d日l h時i分s秒");

$name = $_POST["name"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$age  = $_POST["age"];
$gender  = $_POST["gender"];
$comment = $_POST["comment"];

//文字列を作成
$str = $name.",".$mail.",".$tel.",".$age.",".$gender.",".$comment."\n";
//File操作 デ-タ保存先、aで自動作成
$file = fopen("data/data.csv","a");
// 排他制御
flock($file, LOCK_EX);
fputs($file,$str);
flock($file, LOCK_UN);
fclose($file);
?>

<p>name:<?=$name?></p>
<p>mail:<?=$mail?></p>
<p>tel:<?=$tel?></p>
<p>age:<?=$age?></p>
<p>gender:<?=$gender?></p>
<p>comment:<?=$comment?></p>
</body>
</html>