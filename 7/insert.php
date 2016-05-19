<?php
echo '<pre>';
var_dump($_POST);
echo '</pre>';
  //1. POSTデータ取得（）
$category = $_POST["category"];
$char_name = $_POST["char_name"];
$prefecture = $_POST["prefecture"];
$photo = $_POST["photo"];
$comment = $_POST["comment"];

  //2. DB接続します
  $pdo = new PDO('mysql:dbname=7thkadai;charset=utf8;host=localhost','root','');

  //3．データ登録SQL作成
//  $stmt = $pdo->prepare("INSERT INTO yuru_char (id, category, char_name, prefecture, photo, comment )VALUES(NULL, :category, :char_name, :prefecture, :photo, :comment");

  $stmt = $pdo->prepare("INSERT INTO yuru_char (id, category, char_name, prefecture, photo, comment )VALUES(NULL, :category, :char_name, :prefecture, :photo, :comment)");

  $stmt->bindValue(':category', $category);
  $stmt->bindValue(':char_name', $char_name);
  $stmt->bindValue(':prefecture', $prefecture);
  $stmt->bindValue(':photo', $photo);
  $stmt->bindValue(':comment', $comment);

  $status = $stmt->execute();
echo '<pre>';
var_dump($stmt);
echo '</pre>';
  //4．データ登録処理後
  if($status==false){
    //Errorの場合$status=falseとなり、エラー表示
    echo "SQLエラー";
    exit;
    
  }else{
    //5．index.phpへリダイレクト
      header("Location: index.php");
      exit();



  }
?>
