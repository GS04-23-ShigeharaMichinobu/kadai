<?php
//1.  DB接続します
  $pdo = new PDO('mysql:dbname=7thkadai;charset=utf8;host=localhost','root','');



//2．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM yuru_char");

//3．SQL実行
$flag = $stmt->execute();

//4.データ表示
$view="";
if($flag==false){
  $view = "SQLエラー";
  
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    //5.表示文字列を作成→変数に追記で代入
/*    $view .= '<p>'.$result['category'].','.$result['char_name'].','.$result['prefecture'].','.$result['photo'].','.$result['comment'].'</p>'; */
    
        $view .= '<p>'.$result['char_name'].','.$result['prefecture'].','.$result['photo'].','.$result['comment'].'</p>';

  }
}



?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>検索画面</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

     <label>種別(ゆるキャラ/ご当地ヒーロー)：<input type="radio" name="category" value="ゆるキャラ">ゆるキャラ　<input type="radio" name="category" value="ご当地ヒーロー">ご当地ヒーロー</label><br>
     <label>都道府県：<select name="prefecture">
      <?php
            $pref = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
         for ($i=0; $i < count($pref); $i++) { 
             echo "<option value=".$pref[$i].">".$pref[$i]."</option>";
            }
         ?>
       
        </select></label><br>

<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>
