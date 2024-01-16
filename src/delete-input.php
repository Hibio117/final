<?php require 'db-connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/delete-input.css">
    <title>Document</title>
</head>
<body>
<div id="content">
<h1>削除画面</h1>
<button class="modoru" onclick="location.href='index.php'">トップに戻る</button>
    <table>
<tr><th>作品番号</th><th>作品名</th><th>年</th>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from drama') as $row){
        echo '<tr>';
        echo '<td>',$row['drama_id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['year'],'</td>';
        echo '<td>';
        echo'<a href="delete-output.php?drama_id=', $row['drama_id'], '">削除</a>';
        echo '</td>';
        echo '</th>';
        echo "\n";
    }
?>
    </table>
</body>
</html>