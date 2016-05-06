<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>データ表示</title>
</head>
<body>
<?php

$file = "data/data.csv";
if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
    echo "<table border=1>\n";
    while ( ( $data = fgetcsv ( $handle, 1000, ",", '"' ) ) !== FALSE ) {
        echo "\t<tr>\n";
        for ( $i = 0; $i < count( $data ); $i++ ) {
            echo "\t\t<td>{$data[$i]}</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    fclose ( $handle );
}

?>

</body>
</html>
