<?php
 
$fp = fopen("C:\xampp\htdocs\kadai\06\data\data.csv", "r");
if ($fp){
    while (!feof($fp)) { //ファイルの最後に達したかチェック
        $buffer = fgets($fp);　//ファイルから1行取得
        $arr = explode(",", $buffer);　//取得した行をカンマで分割（TSVならタブ(¥t)で分割）
        $data = trim(arr[0]); //1列目のデータを取得し空白、改行を取り除く
        echo($data."¥n");
    }
    fclose($fp);
}

?>
