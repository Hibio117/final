<?php require 'db-connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>削除画面</h1>
    <form action="index.php" method="post">
    <input type="submit" value="トップに戻る"></form><br>
    
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