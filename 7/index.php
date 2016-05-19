<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ゆるキャラ/ご当地ヒーロー登録</legend>
     <label>種別(ゆるキャラ/ご当地ヒーロー)：<input type="radio" name="category" value="ゆるキャラ">ゆるキャラ　<input type="radio" name="category" value="ご当地ヒーロー">ご当地ヒーロー</label><br>
     <label>なまえ：<input type="text" name="char_name"></label><br>
     <label>都道府県：<select name="prefecture">
      <?php
            $pref = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
         for ($i=0; $i < count($pref); $i++) { 
             echo "<option value=".$pref[$i].">".$pref[$i]."</option>";
            }
         ?>
       
<!--        <option value="東京都">東京都</option> -->
<!--        <option value="大阪府">大阪府</option> -->
        </select></label><br>
     <label>写真URL：<textArea name="photo" rows="10" cols="100"></textArea></label><br>
     <label>コメント：<textArea name="comment" rows="10" cols="100"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
