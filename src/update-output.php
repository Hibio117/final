<?php require 'db-connect.php';?><?php require 'db-connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pdo=new PDO($connect, USER, PASS);

    $sql=$pdo->prepare('update drama set drama_id=?, name=?, where id=?');

    if (empty($_POST['drama_id'])) {
        echo '作品IDを入力してください。';
    } else
    if (empty($_POST['name'])){
        echo '作品名を入力してください。';
    } else
    if (empty($_POST['year'])){
        echo '年を入力してください。';
    }else

    if ($sql->execute([htmlspecialchars($_POST['drama_id']), $_POST['name'], $_POST['year']])){
        echo '更新しました。';
    }else{
        echo '更新できませんでした。';
    }
?>
    <hr>
    <table>
        <tr><th>作品ID</th><th>作品名</th><th>年</th></tr>
    
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
        <button onclick=location.href='update-input.php'">更新画面へ戻る</button>
</body>
</html>