<?php require 'db-connect.php';?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ichiran.css">
    <title>作品一覧</title>
</head>
<body>
    <div id="content">
    <h1>作品一覧</h1><br>
    <button class="modoru" onclick="location.href='index.php'">トップに戻る</button>

    <table border="1">
        <tr>
            <th>　作品番号　</th><th>　作品名　</th><th>　年　</th>
        </tr>

<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach($pdo->query('select * from drama') as $row){
        echo '<tr>';
        echo '<td>',$row['drama_id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['year'],'</td>';
        echo '</td>';
        echo "\n";
     }
?>
</table>    
</body>
</html>