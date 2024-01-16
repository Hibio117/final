<?php require 'db-connect.php';?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update-input.css">
    <title>Document</title>
</head>
<body>
<h1>更新画面</h1>
    <form action="index.php" method="post">
    <input type="submit" value="トップに戻る"></form><br>

    <div class="th0">作品ID</div>
    <div class="th1">作品名</div>
    <div class="th1">年</div>

<?php
    $pdo=new PDO($connect, USER, PASS);

    foreach ($pdo->query('select * from drama') as $row) {
        echo '<form action="update-output.php" method="post">';
        echo '<input type="hidden" name="id" value="', $row['drama_id'], '">';
        echo '<div class="td0">',$row['drama_id'],'</div>';
        echo '<div class="td1">';
        echo '<input type="text" name="name" value="', $row['name'], '">';
        echo '</div> ';
        echo '<div class="td1">';
        echo ' <input type="text" name="year" value="', $row['year'],'">';
        echo '</div> ';
        echo '<div class="td2"><input type="submit" value="更新"></div>';
        echo '</form>';
        echo "\n";
    }
    
?>
</body>
</html>