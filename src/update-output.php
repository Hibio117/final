<?php require 'db-connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update-input.css">
    <title>Document</title>
</head>
<body>
    <div id="content">
<?php
    $pdo=new PDO($connect, USER, PASS);

    $sql=$pdo->prepare('update drama set name=?, year=? where drama_id=?');

    if (empty($_POST['name'])){
        echo '作品名を入力してください。';
    } else
    if (empty($_POST['year'])){
        echo '年を入力してください。';
    }else

    if ($sql->execute([htmlspecialchars($_POST['name']), $_POST['year'], $_POST['id']])){
        echo '更新しました。';
    }else{
        echo '更新できませんでした。';
    }
?>
    <hr>
    <table>
        <tr><th>作品番号</th><th>作品名</th><th>年</th></tr>
    
    <?php
    foreach ($pdo->query('select * from drama') as $row){
        echo '<tr>';
        echo '<td>', $row['drama_id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['year'],'</td>';
        echo '</tr>';
        echo "\n";
    }
    ?>
        </table>
        <button onclick="location.href='update-input.php'">更新画面へ戻る</button>
</body>
</html>